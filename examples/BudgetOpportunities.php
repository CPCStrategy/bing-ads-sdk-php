<?php

// Include the BingAds\v10 namespaced class files available
// for download at http://go.microsoft.com/fwlink/?LinkId=322147
include 'bingads\v10\AdInsightClasses.php';
include 'bingads\v10\CampaignManagementClasses.php';
include 'BingAds\ClientProxy.php';

// Specify the BingAds\AdInsight objects that will be used.
use BingAds\v10\AdInsight\GetBudgetOpportunitiesRequest;

// Specify the BingAds\AdInsight objects that will be used.
use BingAds\v10\CampaignManagement\GetCampaignsByAccountIdRequest;
use BingAds\v10\CampaignManagement\CampaignType;

// Specify the BingAds\Proxy object that will be used.
use BingAds\Proxy\ClientProxy;

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

// Specify your credentials.

$UserName = "<UserNameGoesHere>";
$Password = "<PasswordGoesHere>";
$DeveloperToken = "<DeveloperTokenGoesHere>";
$CustomerId = "<CustomerIdGoesHere>";
$AccountId = "<AccountIdGoesHere>";

$GLOBALS['proxy'] = null;

$GLOBALS['adInsightWsdl'] = "https://adinsight.api.bingads.microsoft.com/Api/Advertiser/AdInsight/V10/AdInsightService.svc?singleWsdl";
$GLOBALS['adInsightProxy'] = null;

$GLOBALS['campaignWsdl'] = "https://campaign.api.bingads.microsoft.com/Api/Advertiser/CampaignManagement/V10/CampaignManagementService.svc?singleWsdl";
$GLOBALS['campaignProxy'] = null;

try
{
    $GLOBALS['adInsightProxy'] = ClientProxy::ConstructWithAccountId($GLOBALS['adInsightWsdl'], $UserName, $Password, $DeveloperToken, $AccountId, null);
    $GLOBALS['campaignProxy'] = ClientProxy::ConstructWithAccountId($GLOBALS['campaignWsdl'], $UserName, $Password, $DeveloperToken, $AccountId, null);

    $campaigns = GetCampaignsByAccountId(
    	$AccountId,
        CampaignType::SearchAndContent . ' ' . CampaignType::Shopping
    );

        foreach ($campaigns->Campaign as $campaign)
        {
    	    $opportunities = GetBudgetOpportunities(
    		$campaign->Id
            );

    	    OutputBudgetOpportunities($opportunities, $campaign->Id);
        }
}
catch (SoapFault $e)
{
	// Output the last request/response.

	print "\nLast SOAP request/response:\n";
	print $GLOBALS['proxy']->GetWsdl() . "\n";
	print $GLOBALS['proxy']->GetService()->__getLastRequest()."\n";
	print $GLOBALS['proxy']->GetService()->__getLastResponse()."\n";
        print "\n\n";

	// Ad Insight and Campaign Management service operations can throw AdApiFaultDetail.
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

	// Ad Insight and Campaign Management service operations can throw ApiFaultDetail.
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


// Gets the budget opportunities for the specified campaign.

function GetBudgetOpportunities($campaignId)
{
	$GLOBALS['proxy'] = $GLOBALS['adInsightProxy'];

	$request = new GetBudgetOpportunitiesRequest();
	$request->CampaignId = $campaignId;

	return $GLOBALS['adInsightProxy']->GetService()->GetBudgetOpportunities($request)->Opportunities;
}

// Gets campaigns of the specified type for the account.

function GetCampaignsByAccountId($accountId, $campaignType)
{
	$GLOBALS['proxy'] = $GLOBALS['campaignProxy'];

	$request = new GetCampaignsByAccountIdRequest();
	$request->AccountId = $accountId;
	$request->CampaignType = $campaignType;

	return $GLOBALS['campaignProxy']->GetService()->GetCampaignsByAccountId($request)->Campaigns;
}

// Outputs the list of BudgetOpportunity objects.

function OutputBudgetOpportunities($opportunities, $campaignId)
{
    if (!empty($opportunities->Opportunity))
    {
	foreach ($opportunities->BudgetOpportunity as $opportunity)
        {
            print "BudgetPoints: \n";
            foreach ($opportunity->BudgetPoints as $budgetPoint)
            {
                OutputBudgetPoint($budgetPoint);
            }
            printf("BudgetType: %s\n", $opportunity->BudgetType);
            printf("CampaignId: %s\n", $opportunity->CampaignId);
            printf("CurrentBudget: %s\n", $opportunity->CurrentBudget);
            printf("IncreaseInClicks: %s\n", $opportunity->IncreaseInClicks);
            printf("IncreaseInImpressions: %s\n", $opportunity->IncreaseInImpressions);
            printf("OpportunityKey: %s\n", $opportunity->OpportunityKey);
            printf("PercentageIncreaseInClicks: %s\n", $opportunity->PercentageIncreaseInClicks);
            printf("PercentageIncreaseInImpressions: %s\n", $opportunity->PercentageIncreaseInImpressions);
            printf("RecommendedBudget: %s\n", $opportunity->RecommendedBudget);
        }
    }
    else
    {
        printf("There are no budget opportunities for CampaignId: %s\n", $campaignId);
    }
}

// Outputs the BudgetPoint object.

function OutputBudgetPoint($budgetPoint)
{
    if ($budgetPoint != null)
    {
	printf("BudgetAmount: %s\n", $budgetPoint->BudgetAmount);
        printf("BudgetPointType: %s\n", $budgetPoint->BudgetPointType);
        printf("EstimatedWeeklyClicks: %s\n", $budgetPoint->EstimatedWeeklyClicks);
        printf("EstimatedWeeklyCost: %s\n", $budgetPoint->EstimatedWeeklyCost);
        printf("EstimatedWeeklyImpressions: %s\n", $budgetPoint->EstimatedWeeklyImpressions);
    }
}


?>
