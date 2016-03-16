<?php

// Copyright 2015 Microsoft Corporation

// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at

//    http://www.apache.org/licenses/LICENSE-2.0

// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

// Include the Bing Ads namespaced class file available
// for download at http://go.microsoft.com/fwlink/?LinkId=322147
include 'bingads\CustomerManagementClasses.php';
include 'bingads\ClientProxy.php';

// Specify the BingAds\CustomerManagement objects that will be used.
use BingAds\CustomerManagement\AddClientLinksRequest;
use BingAds\CustomerManagement\SearchClientLinksRequest;
use BingAds\CustomerManagement\UpdateClientLinksRequest;
use BingAds\CustomerManagement\Paging;
use BingAds\CustomerManagement\OrderBy;
use BingAds\CustomerManagement\OrderByField;
use BingAds\CustomerManagement\SortOrder;
use BingAds\CustomerManagement\Predicate;
use BingAds\CustomerManagement\PredicateOperator;
use BingAds\CustomerManagement\ClientLink;
use BingAds\CustomerManagement\ClientLinkStatus;
use BingAds\CustomerManagement\OperationError;

// Specify the BingAds\Proxy object that will be used.
use BingAds\Proxy\ClientProxy;

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

// Specify your Super Admin credentials for both the agency and client.

$AgencyUserName = "<AgencyUserNameGoesHere>";
$AgencyPassword = "<AgencyPasswordGoesHere>";
$AgencyDeveloperToken = "AgencyDeveloperTokenGoesHere>";
$AgencyCustomerId = "<AgencyCustomerIdGoesHere>";

$ClientUserName = "<ClientUserNameGoesHere>";
$ClientPassword = "<ClientPasswordGoesHere>";
$ClientDeveloperToken = "ClientDeveloperTokenGoesHere>";
$ClientAccountId = "<ClientAccountIdGoesHere>";


// Customer Management WSDL

$wsdl = "https://clientcenter.api.bingads.microsoft.com/Api/CustomerManagement/v9/CustomerManagementService.svc?singleWsdl";


try
{
    $agencyProxy = ClientProxy::ConstructWithCredentials($wsdl, $AgencyUserName, $AgencyPassword, $AgencyDeveloperToken, null);
    $clientProxy = ClientProxy::ConstructWithCredentials($wsdl, $ClientUserName, $ClientPassword, $ClientDeveloperToken, null);

    $updateClientLinksResponse = null;

    // Specify the client link search criteria

    $pageInfo = new Paging();
    $pageInfo->Index = 0;    // The first page
    $pageInfo->Size = 100;   // The first 100 client links for this page of results

    $ordering = new OrderBy();
    $ordering->Field = OrderByField::Number;
    $ordering->Order = SortOrder::Ascending;

    $predicate = new Predicate();
    $predicate->Field = "ClientAccountId";
    $predicate->Operator = PredicateOperator::In;
    $predicate->Value = $ClientAccountId;

    // Search for client links that match the specified criteria.

    $clientLinks = SearchClientLinks(
        $agencyProxy,
        array($ordering),
        $pageInfo,
        array($predicate));

    // Determine whether the agency is already managing the specified client account.
    // If a link exists with status either Active, LinkInProgress, LinkPending,
    // UnlinkInProgress, or UnlinkPending, the agency may not initiate a duplicate client link.

    $clientLink;
    $newLinkRequired = true;

    if (count((array)$clientLinks->ClientLink))
    {
        $clientLink = $clientLinks->ClientLink[0];
        printf("Current ClientLink Status: %s.\n\n", $clientLink->Status);

        switch ($clientLink->Status)
        {
            // The agency may choose to initiate the unlink process,
            // which would terminate the existing relationship with the client.
            case ClientLinkStatus::Active:
                $clientLink->Status = ClientLinkStatus::UnlinkRequested;
                $updateClientLinksResponse = UpdateClientLinks($agencyProxy, array($clientLink));
                print("The agency updated status: UnlinkRequested.\n\n");
                $newLinkRequired = false;
                break;
            // Waiting on a system status transition or waiting for the StartDate.
            case ClientLinkStatus::LinkAccepted:
                print("The status is transitioning towards LinkInProgress.\n\n");
                $newLinkRequired = false;
                break;
            // Waiting on a system status transition.
            case ClientLinkStatus::LinkInProgress:
                print("The status is transitioning towards Active.\n\n");
                $newLinkRequired = false;
                break;
            // When the status is LinkPending, either the agency or client may update the status.
            // The agency may choose to cancel the client link invitation; however, in this sample
            // the client will accept the invitation.
            // If the client does not accept or decline the invitation within 30 days, and if the agency
            // does not update the status to LinkCanceled, the system updates the status to LinkExpired.
            case ClientLinkStatus::LinkPending:
                //$clientLink->Status = ClientLinkStatus::LinkCanceled;
                //$updateClientLinksResponse = UpdateClientLinks($agencyProxy, array($clientLink));
                //print("The agency updated status: LinkCanceled.\n\n");
                $clientLink->Status = ClientLinkStatus::LinkAccepted;
                $updateClientLinksResponse = UpdateClientLinks($clientProxy, array($clientLink));
                print("The client updated status: LinkAccepted.\n\n");
                $newLinkRequired = false;
                break;
            // Waiting on a system status transition.
            case ClientLinkStatus::UnlinkInProgress:
                print("The status is transitioning towards Inactive.\n\n");
                $newLinkRequired = false;
                break;
            // Waiting on a system status transition.
            case ClientLinkStatus::UnlinkPending:
                print("The status is transitioning towards Inactive.\n\n");
                $newLinkRequired = false;
                break;
            // The link lifecycle has ended.
            default:
                print("A new client link invitation is required.\n\n");
                break;
        }

        // Print errors if any occurred when updating the client link.
        if (!empty($updateClientLinksResponse))
        {
            PrintPartialErrors($updateClientLinksResponse->OperationErrors,
                               $updateClientLinksResponse->PartialErrors);
        }
    }

    // If no links exist between the agency and specified client account, or a link exists with status
    // either Inactive, LinkCanceled, LinkDeclined, LinkExpired, or LinkFailed, then the agency must
    // initiate a new client link.

    if($newLinkRequired)
    {
        $clientLink = new ClientLink();
        $clientLink->ClientAccountId = $ClientAccountId;
        $clientLink->ManagingCustomerId = $AgencyCustomerId;
        $clientLink->IsBillToClient = true;
        $clientLink->Name = "My Client Link";
        $clientLink->StartDate = null;
        $clientLink->SuppressNotification = false;

        $addClientLinksResponse = AddClientLinks($agencyProxy, array($clientLink));

        // Print errors if any occurred when adding the client link.
        PrintPartialErrors($addClientLinksResponse->OperationErrors, $addClientLinksResponse->PartialErrors);
        print("The agency attempted to add a new ClientLink.\n\n");
    }

    // Get and print the current client link

    $clientLinks = SearchClientLinks(
        $agencyProxy,
        array($ordering),
        $pageInfo,
        array($predicate));

    PrintClientLinks($clientLinks);
}
catch (SoapFault $e)
{
    // Output the last request/response.

    print "\nLast SOAP request/response:\n";

    print $clientProxy->GetWsdl() . "\n";
    print $clientProxy->GetService()->__getLastRequest()."\n";
    print $clientProxy->GetService()->__getLastResponse()."\n";

    print $agencyProxy->GetWsdl() . "\n";
    print $agencyProxy->GetService()->__getLastRequest()."\n";
    print $agencyProxy->GetService()->__getLastResponse()."\n";


    // Customer Management service operations can throw AdApiFaultDetail.
    if (isset($e->detail->AdApiFaultDetail))
    {
      // Log this fault.

      print "The operation failed with the following faults:\n";

      $errors = is_array($e->detail->AdApiFaultDetail->Errors->AdApiError)
      ? $e->detail->AdApiFaultDetail->Errors->AdApiError
      : array('AdApiError' => $e->detail->AdApiFaultDetail->Errors->AdApiError);

      // If the AdApiError array is not null, the following are examples of error codes that may be found.
      foreach ($errors as $error)
      {
        print "AdApiError\n";
        printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

        switch ($error->Code)
        {
          case 105:  // InvalidCredentials
            break;
          default:
            print "Please see MSDN documentation for more details about the error code output above.\n";
            break;
        }
      }
    }

    // Customer Management service operations can throw ApiFault.
    elseif (isset($e->detail->ApiFault))
    {
      // Log this fault.

      print "The operation failed with the following faults:\n";

      // If the OperationError array is not null, the following are examples of error codes that may be found.
      if (!empty($e->detail->ApiFault->OperationErrors))
      {
        $errors = is_array($e->detail->ApiFault->OperationErrors->OperationError)
        ? $e->detail->ApiFault->OperationErrors->OperationError
        : array('OperationError' => $e->detail->ApiFault->OperationErrors->OperationError);

        foreach ($errors as $error)
        {
          print "OperationError\n";
          printf("Code: %d\nMessage: %s\n", $error->Code, $error->Message);

          switch ($error->Code)
          {
            case 106:   // UserIsNotAuthorized
              break;
            default:
              print "Please see MSDN documentation for more details about the error code output above.\n";
              break;
          }
        }
      }
    }
}
catch (Exception $e)
{
    if ($e->getPrevious())
    {
        ; // Ignore fault exceptions that we already caught.
    }
    else
    {
        print $e->getCode()." ".$e->getMessage()."\n\n";
        print $e->getTraceAsString()."\n\n";
    }
}

// Searches client links for the customer of the current authenticated user,
// filtered by the search criteria.

function SearchClientLinks(
    $proxy,
    $ordering,
    $pageInfo,
    $predicates )
{
    // Set the request information.

    $request = new SearchClientLinksRequest();
    $request->Ordering = $ordering;
    $request->PageInfo = $pageInfo;
    $request->Predicates = $predicates;

    return $proxy->GetService()->SearchClientLinks($request)->ClientLinks;
}

// Initiates the client link process to manage the account of another customer.
// Sends an invitation from an agency to a potential client.

function AddClientLinks($proxy, $clientLinks)
{
    // Set the request information.

    $request = new AddClientLinksRequest();
    $request->ClientLinks = $clientLinks;

    return $proxy->GetService()->AddClientLinks($request);
}

// Updates the status of the specified client links.

function UpdateClientLinks($proxy, $clientLinks)
{
    // Set the request information.

    $request = new UpdateClientLinksRequest();
    $request->ClientLinks = $clientLinks;

    return $proxy->GetService()->UpdateClientLinks($request);
}

// Prints a list of client links.

function PrintClientLinks($clientLinks)
{
    if (empty($clientLinks->ClientLink))
    {
        return;
    }

    foreach ($clientLinks->ClientLink as $clientLink)
    {
        printf("Status: %s\n", $clientLink->Status);
        printf("ClientAccountId: %d\n", $clientLink->ClientAccountId);
        printf("ClientAccountNumber: %s\n", $clientLink->ClientAccountNumber);
        printf("ManagingAgencyCustomerId: %d\n", $clientLink->ManagingCustomerId);
        printf("ManagingCustomerNumber: %s\n", $clientLink->ManagingCustomerNumber);
        print($clientLink->IsBillToClient ? "IsBillToClient: True\n" : "IsBillToClient: False\n");
        printf("InviterEmail: %s\n", $clientLink->InviterEmail);
        printf("InviterName: %s\n", $clientLink->InviterName);
        printf("InviterPhone: %s\n", $clientLink->InviterPhone);
        printf("LastModifiedByUserId: %d\n", $clientLink->LastModifiedByUserId);
        printf("Name: %s\n", $clientLink->Name);
        printf("Note: %s\n", $clientLink->Note);
        print("\n");
    }
}

// Print errors if any occurred when adding or updating the client link.

function PrintPartialErrors($operationErrors, $partialErrors)
{
    if (empty($operationErrors->OperationErrors))
    {
        return;
    }

    foreach ($operationErrors as $error)
    {
        print("OperationError\n");
        printf("Code: %s\nMessage: %s\n", $error->Code, $error->Message);
    }

    if (empty($partialErrors->ArrayOfOperationError))
    {
        return;
    }

    foreach ($partialErrors->ArrayOfOperationError as $errors)
    {
        if (!empty($errors))
        {
            foreach ($errors->OperationError as $error)
            {
                if (!empty($error))
                {
                    printf("OperationError\n");
                    printf("Code: %s\nMessage: %s\n", $error->Code, $error->Message);
                }
            }
        }
    }
}

?>
