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

// Include the Bing Ads namespaced class files available
// for download at http://go.microsoft.com/fwlink/?LinkId=322147
include '../vendor/autoload.php';

// Specify the BingAds\Optimizer objects that will be used.
use BingAds\Optimizer\GetBudgetOpportunitiesRequest;
use BingAds\Optimizer\ApplyOpportunitiesRequest;

// Specify the BingAds\Proxy object that will be used.
use BingAds\Proxy\ClientProxy;

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

// Specify your credentials.

$UserName = "<UserNameGoesHere>";
$Password = "<PasswordGoesHere>";
$DeveloperToken = "<DeveloperTokenGoesHere>";
$CustomerId = <CustomerIdGoesHere>;
$AccountId = <AccountIdGoesHere>;

// Optimizer WSDL

$wsdl = "https://api.bingads.microsoft.com/Api/Advertiser/Optimizer/v9/OptimizerService.svc?singleWsdl";


try
{
    $proxy = ClientProxy::ConstructWithAccountId($wsdl, $UserName, $Password, $DeveloperToken, $AccountId, null);

    // Get the budget opportunities which have not expired for the specified account.

    $opportunities = GetBudgetOpportunities(
    		$proxy,
    		$AccountId
    		);

	if (empty($opportunities->Opportunity))
	{
		print "There are not any budget opportunities for the specified account.\n";
	}
	else
	{
	    $opportunityKeys = array();

        foreach ($opportunities as $opportunity)
        {
    	    // Add the first 10,000 opportunity keys to an array

    	    if ($opportunity != null && sizeof($opportunityKeys) < 10000)
    	    {
    		    printf("OpportunityKey: %s", $opportunity->OpportunityKey);
    		    $opportunityKeys[] = $opportunity->OpportunityKey;
    	    }
        }

        // Apply the suggested budget opportunities.
        ApplyOpportunities(
        	$proxy,
        	$AccountId,
        	$opportunityKeys
        	);
	}
}
catch (SoapFault $e)
{
	// Output the last request/response.

	print "\nLast SOAP request/response:\n";
	print $proxy->GetWsdl() . "\n";
	print $proxy->GetService()->__getLastRequest()."\n";
	print $proxy->GetService()->__getLastResponse()."\n";

	// Optimizer service operations can throw AdApiFaultDetail.
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
				case 0:    // InternalError
					break;
				case 105:  // InvalidCredentials
					break;
				default:
					print "Please see MSDN documentation for more details about the error code output above.\n";
					break;
			}
		}
	}

	// Optimizer service operations can throw ApiFaultDetail.
	elseif (isset($e->detail->ApiFaultDetail))
	{
		// Log this fault.

		print "The operation failed with the following faults:\n";

		// If the BatchError array is not null, the following are examples of error codes that may be found.
		if (!empty($e->detail->ApiFaultDetail->BatchErrors))
		{
			$errors = is_array($e->detail->ApiFaultDetail->BatchErrors->BatchError)
			? $e->detail->ApiFaultDetail->BatchErrors->BatchError
			: array('BatchError' => $e->detail->ApiFaultDetail->BatchErrors->BatchError);

			foreach ($errors as $error)
			{
				printf("BatchError at Index: %d\n", $error->Index);
				printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

				switch ($error->Code)
				{
					case 0:    // InternalError
						break;
					default:
						print "Please see MSDN documentation for more details about the error code output above.\n";
						break;
				}
			}
		}

		// If the OperationError array is not null, the following are examples of error codes that may be found.
		if (!empty($e->detail->ApiFaultDetail->OperationErrors))
		{
			$errors = is_array($e->detail->ApiFaultDetail->OperationErrors->OperationError)
			? $e->detail->ApiFaultDetail->OperationErrors->OperationError
			: array('OperationError' => $e->detail->ApiFaultDetail->OperationErrors->OperationError);

			foreach ($errors as $error)
			{
				print "OperationError\n";
				printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

				switch ($error->Code)
				{
					case 0:    // InternalError
						break;
					case 105:  // InvalidCredentials
						break;
					case 1102:  // InvalidAccountId
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


// Gets the budget opportunities which have not expired for the specified account.

function GetBudgetOpportunities($proxy, $accountId)
{
	// Set the request information.

	$request = new GetBudgetOpportunitiesRequest();
	$request->AccountId = $accountId;

	return $proxy->GetService()->GetBudgetOpportunities($request)->Opportunities;
}

// Gets the budget opportunities which have not expired for the specified account.

function ApplyOpportunities($proxy, $accountId, $opportunityKeys)
{
	// Set the request information.

	$request = new ApplyOpportunitiesRequest();
	$request->AccountId = $accountId;
	$request->OpportunityKeys = $opportunityKeys;

	$proxy->GetService()->ApplyOpportunities($request);
}

?>
