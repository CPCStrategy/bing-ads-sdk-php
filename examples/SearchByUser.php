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
include '../vendor/autoload.php';

// Specify the BingAds\CampaignManagement objects that will be used.
use BingAds\CampaignManagement\GetCampaignsByAccountIdRequest;

// Specify the BingAds\CustomerManagement objects that will be used.
use BingAds\CustomerManagement\GetUserRequest;
use BingAds\CustomerManagement\SearchCustomersRequest;
use BingAds\CustomerManagement\GetAccountsInfoRequest;
use BingAds\CustomerManagement\Paging;
use BingAds\CustomerManagement\DateRange;
use BingAds\CustomerManagement\OrderBy;
use BingAds\CustomerManagement\OrderByField;
use BingAds\CustomerManagement\SortOrder;
use BingAds\CustomerManagement\Predicate;
use BingAds\CustomerManagement\PredicateOperator;
use BingAds\CustomerManagement\Customer;
use BingAds\CustomerManagement\ApplicationType;
use BingAds\CustomerManagement\User;

// Specify the BingAds\Proxy object that will be used.
use BingAds\Proxy\ClientProxy;

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

// Specify your credentials.

$UserName = "<UserNameGoesHere>";
$Password = "<PasswordGoesHere>";
$DeveloperToken = "<DeveloperTokenGoesHere>";

$GLOBALS['proxy'] = null;

$GLOBALS['customerWsdl'] = "https://clientcenter.api.bingads.microsoft.com/Api/CustomerManagement/v9/CustomerManagementService.svc?singleWsdl";
$GLOBALS['customerProxy'] = null;

$GLOBALS['campaignWsdl'] = "https://api.bingads.microsoft.com/Api/Advertiser/CampaignManagement/v9/CampaignManagementService.svc?singleWsdl";
$GLOBALS['campaignProxy'] = null;

try
{
    $GLOBALS['customerProxy'] = ClientProxy::ConstructWithCredentials($GLOBALS['customerWsdl'], $GLOBALS['UserName'], $GLOBALS['Password'], $GLOBALS['DeveloperToken'], null);

    // Get the User object for the current authenticated user, by calling GetUser
    // with a null UserId.
    // Later in this sample we will search for all customers and accounts
    // that the user may access.

    $user = GetUser(null);

    PrintUser($user);

    // Specify the page index and number of customer results per page.

    $pageInfo = new Paging();
    $pageInfo->Index = 0;    // The first page
    $pageInfo->Size = 100;   // The first 100 customers for this page of results

    // Optionally specify the date range when the requested customers were created.
    // The DateRange Min and Max are both optional, and you may specify one, both, or neither.

    $dateRange = new DateRange();
    $dateRange->MaxDate = "";    // yyyyMMdd
    $dateRange->MinDate = "";    // yyyyMMdd

    // Specify whether the returned Customer list should be sorted by customer
    // name, number, or identifier.
    // You should only specify one OrderBy element in the array.
    // Additional array items, if specified will be ignored by the service.

    $ordering = new OrderBy();
    $ordering->Field = OrderByField::Number;
    $ordering->Order = SortOrder::Ascending;

    // Given the user credentials authenticated above, search for customers by UserName.

    $predicate = new Predicate();
    $predicate->Field = "UserName";
    $predicate->Operator = PredicateOperator::Equals;
    $predicate->Value = $user->UserName;

    // Search for customers that match the specified criteria.

    $customers = SearchCustomers(
        $dateRange,
        array($ordering),
        $pageInfo,
        array($predicate) );

    printf("Customer search results by UserName (%s):\n\n", $user->UserName);
    PrintCustomers($customers);
}
catch (SoapFault $e)
{
  // Output the last request/response.

  print "\nLast SOAP request/response:\n";
  print $GLOBALS['proxy']->GetWsdl() . "\n";
  print $GLOBALS['proxy']->GetService()->__getLastRequest()."\n";
  print $GLOBALS['proxy']->GetService()->__getLastResponse()."\n";

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


// Gets a User object by the specified UserId.

function GetUser($userId)
{
    $GLOBALS['proxy'] = $GLOBALS['customerProxy'];

    $request = new GetUserRequest();
    $request->UserId = $userId;

    return $GLOBALS['customerProxy']->GetService()->GetUser($request)->User;
}

// Gets the advertising customers that the user
// has access to and that match the filter criteria.

function SearchCustomers(
        $dateRange,
        $ordering,
        $pageInfo,
        $predicates )
{
    $GLOBALS['proxy'] = $GLOBALS['customerProxy'];

    $request = new SearchCustomersRequest();
    $request->ApplicationScope = ApplicationType::Advertiser;
    $request->DateRange = $dateRange;
    $request->Ordering = $ordering;
    $request->PageInfo = $pageInfo;
    $request->Predicates = $predicates;

    return $GLOBALS['customerProxy']->GetService()->SearchCustomers($request)->Customers;
}


// Returns a list of accounts such that the returned accounts
// are within the specified customer identifier, and not managed
// through an agency or reseller.

function GetAccountsInfo($customerId)
{
    $GLOBALS['proxy'] = $GLOBALS['customerProxy'];

    $request = new GetAccountsInfoRequest();
    $request->CustomerId = $customerId;
    $request->OnlyParentAccounts = true;

    return $GLOBALS['customerProxy']->GetService()->GetAccountsInfo($request)->AccountsInfo;
}

// Returns a list of campaigns for the specified account.

function GetCampaignsByAccountId($customerId, $accountId)
{
    $GLOBALS['campaignProxy'] = ClientProxy::ConstructWithAccountAndCustomerId($GLOBALS['campaignWsdl'], $GLOBALS['UserName'], $GLOBALS['Password'], $GLOBALS['DeveloperToken'], $accountId, $customerId, null);
    $GLOBALS['proxy'] = $GLOBALS['campaignProxy'];

    $request = new GetCampaignsByAccountIdRequest();
    $request->AccountId = $accountId;

    return $GLOBALS['campaignProxy']->GetService()->GetCampaignsByAccountId($request)->Campaigns;
}


// Prints the details of the specified user.

function PrintUser($user)
{
    if(empty($user))
    {
        return;
    }

    if ($user->IsMigratedToMicrosoftAccount)
    {
        print "The user is migrated to a Microsoft account, " .
              "and the UserName field is the corresponding email address.\n\n";
    }
    else
    {
        print "The user is not yet migrated to a Microsoft account, " .
              "and the value of UserName is a legacy Bing Ads managed user.\n\n";
    }

    printf("UserName is %s\n", $user->UserName);
    printf("Bing Ads Email is %s\n", $user->ContactInfo->Email);
    printf("User Id is %d\n", $user->Id);
    printf("FirstName is %s\n", $user->Name->FirstName);
    if (!empty($user->Name->MiddleInitial))
    {
        printf("MiddleInitial is %s\n", $user->Name->MiddleInitial);
    }
    printf("LastName is %s\n\n", $user->Name->LastName);

}


// Prints a list of customers.

function PrintCustomers($customers)
{
    foreach ($customers->Customer as $cust)
    {
        if (!empty($cust))
        {
            printf("CustomerId: %d\n", $cust->Id);
            $aInfos = GetAccountsInfo($cust->Id);

            // Print a list of all accounts managed by the customer
            foreach ($aInfos->AccountInfo as $aInfo)
            {
                if (!empty($aInfo))
                {
                    printf("CustomerAccountId: %d\n", $aInfo->Id);
                    $campaigns = GetCampaignsByAccountId($cust->Id, $aInfo->Id);
                    foreach ($campaigns->Campaign as $campaign)
                    {
                        printf("CampaignId: %d\n", $campaign->Id);
                    }
                }
            }
        }

        print "\n";
    }
}

?>
