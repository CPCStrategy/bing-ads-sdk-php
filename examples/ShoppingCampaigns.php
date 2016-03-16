<?php

// Include the Bing Ads namespaced class files available
// for download at http://go.microsoft.com/fwlink/?LinkId=322147
include 'bingads\CampaignManagementClasses.php';
include 'bingads\ClientProxy.php';

// Specify the BingAds\CampaignManagement objects that will be used.
use BingAds\CampaignManagement\AddCampaignsRequest;
use BingAds\CampaignManagement\Campaign;
use BingAds\CampaignManagement\BudgetLimitType;
use BingAds\CampaignManagement\GetBMCStoresByCustomerIdRequest;
use BingAds\CampaignManagement\BMCStore;
use BingAds\CampaignManagement\ShoppingSetting;
use BingAds\CampaignManagement\BingAds\CampaignManagement;
use BingAds\CampaignManagement\CampaignType;
use BingAds\CampaignManagement\DeleteCampaignsRequest;
use BingAds\CampaignManagement\AddAdGroupsRequest;
use BingAds\CampaignManagement\AdGroup;
use BingAds\CampaignManagement\Date;
use BingAds\CampaignManagement\AdDistribution;
use BingAds\CampaignManagement\BiddingModel;
use BingAds\CampaignManagement\PricingModel;
use BingAds\CampaignManagement\UpdateAdGroupsRequest;
use BingAds\CampaignManagement\GetAdGroupsByIdsRequest;
use BingAds\CampaignManagement\ProductAd;
use BingAds\CampaignManagement\AddAdsRequest;
use BingAds\CampaignManagement\CampaignCriterionType;
use BingAds\CampaignManagement\ProductScope;
use BingAds\CampaignManagement\AddCampaignCriterionsRequest;
use BingAds\CampaignManagement\CampaignCriterion;
use BingAds\CampaignManagement\ProductCondition;
use BingAds\CampaignManagement\ProductPartitionType;
use BingAds\CampaignManagement\CriterionType;
use BingAds\CampaignManagement\BiddableAdGroupCriterion;
use BingAds\CampaignManagement\ItemAction;
use BingAds\CampaignManagement\AdGroupCriterionAction;
use BingAds\CampaignManagement\ApplyProductPartitionActionsRequest;
use BingAds\CampaignManagement\GetAdGroupCriterionsByAdGroupIdRequest;
use BingAds\CampaignManagement\NegativeAdGroupCriterion;
use BingAds\CampaignManagement\ProductPartition;
use BingAds\CampaignManagement\FixedBid;
use BingAds\CampaignManagement\Bid;


// Specify the BingAds\Proxy objects that will be used.
use BingAds\Proxy\ClientProxy;

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

// Specify your credentials.

$UserName >";UserNameGoesHere>";
$Password >";PasswordGoesHere>";
$DeveloperToken >";DeveloperTokenGoesHere>";
$CustomerId >";CustomerIdGoesHere>;
$AccountId >";AccountIdGoesHere>;

$PartitionActions = array(); // AdGroupCriterionAction array
$ReferenceId = -1;


// Campaign Management WSDL

$wsdl = "https://api.bingads.microsoft.com/Api/Advertiser/CampaignManagement/V9/CampaignManagementService.svc?singleWsdl";

$ids = null;


try
{
	$proxy = ClientProxy::ConstructWithAccountAndCustomerId($wsdl, $UserName, $Password, $DeveloperToken, $AccountId, $CustomerId, null);

	$stores= GetStores($proxy);

	if (!isset($stores))
	{
		printf("Customer %d does not have any regeistered BMC stores.\n\n", $CustomerId);
		return;
	}

	// Create a Bing Shopping campaign using the ID of the first store in the list.

	$campaignIds = AddCampaigns($proxy, $AccountId, $stores[0]->Id);
	PrintCampaignIdentifiers($campaignIds->long);

	$adGroupIds = AddAdGroups($proxy, $campaignIds->long[0]);
	PrintAdGroupIdentifiers($adGroupIds->long);

	$response = AddAds($proxy, $adGroupIds->long[0]);
	PrintAdIdentifiers($response->AdIds->long, $response->PartialErrors);

	// Add criterion to the campaign. The criterion is used to limit the campaign to a subset of
	// your product catalog.

	$addCriterionResponse = AddCampaignCriterion($proxy, $campaignIds->long[0]);
	PrintCampaignCriterionIdentifiers($addCriterionResponse->CampaignCriterionIds->long, $addCriterionResponse->NestedPartialErrors);

	AddAndUpdateAdGroupCriterion($proxy, $AccountId, $PartitionActions, $adGroupIds->long[0]);
	$applyPartitionActionsResponse = AddBranchAndLeafCriterion($proxy, $AccountId, $PartitionActions, $adGroupIds->long[0]);

	$rootId = $applyPartitionActionsResponse->AdGroupCriterionIds->long[1];
	$electronicsCriterionId = $applyPartitionActionsResponse->AdGroupCriterionIds->long[8];
	UpdateBranchAndLeafCriterion($proxy, $PartitionActions, $AccountId, $adGroupIds->long[0], $rootId, $electronicsCriterionId);

	// Delete the campaign from the account.

	//DeleteCampaigns($proxy, $AccountId, $campaignIds->long);
	//printf("Deleted CampaignId %d\n", $campaignIds->long[0]); // Added just the one

}
catch (SoapFault $e)
{
	// Output the last request/response.

	print "\nLast SOAP request/response:\n";
	print $proxy->GetWsdl() . "\n";
	print $proxy->GetService()->__getLastRequest()."\n";
	print $proxy->GetService()->__getLastResponse()."\n";

	// Campaign Management service operations can throw AdApiFaultDetail.
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
				case 117:  // CallRateExceeded
					break;
				default:
					print "Please see MSDN documentation for more details about the error code output above.\n";
					break;
			}
		}
	}

	// Campaign Management service operations can throw ApiFaultDetail.
	elseif (isset($e->detail->EditorialApiFaultDetail))
	{
		// Log this fault.

		print "The operation failed with the following faults:\n";

		// If the BatchError array is not null, the following are examples of error codes that may be found.
		if (!empty($e->detail->EditorialApiFaultDetail->BatchErrors))
		{
			$errors = is_array($e->detail->EditorialApiFaultDetail->BatchErrors->BatchError)
			? $e->detail->EditorialApiFaultDetail->BatchErrors->BatchError
			: array('BatchError' => $e->detail->EditorialApiFaultDetail->BatchErrors->BatchError);

			foreach ($errors as $error)
			{
				printf("BatchError at Index: %d\n", $error->Index);
				printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

				switch ($error->Code)
				{
					case 0:     // InternalError
						break;
					default:
						print "Please see MSDN documentation for more details about the error code output above.\n";
						break;
				}
			}
		}

		// If the EditorialError array is not null, the following are examples of error codes that may be found.
		if (!empty($e->detail->EditorialApiFaultDetail->EditorialErrors))
		{
			$errors = is_array($e->detail->EditorialApiFaultDetail->EditorialErrors->EditorialError)
			? $e->detail->EditorialApiFaultDetail->EditorialErrors->EditorialError
			: array('BatchError' => $e->detail->EditorialApiFaultDetail->EditorialErrors->EditorialError);

			foreach ($errors as $error)
			{
				printf("EditorialError at Index: %d\n", $error->Index);
				printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);
				printf("Appealable: %s\nDisapproved Text: %s\nCountry: %s\n", $error->Appealable, $error->DisapprovedText, $error->PublisherCountry);

				switch ($error->Code)
				{
					case 0:     // InternalError
						break;
					default:
						print "Please see MSDN documentation for more details about the error code output above.\n";
						break;
				}
			}
		}

		// If the OperationError array is not null, the following are examples of error codes that may be found.
		if (!empty($e->detail->EditorialApiFaultDetail->OperationErrors))
		{
			$errors = is_array($e->detail->EditorialApiFaultDetail->OperationErrors->OperationError)
			? $e->detail->EditorialApiFaultDetail->OperationErrors->OperationError
			: array('OperationError' => $e->detail->EditorialApiFaultDetail->OperationErrors->OperationError);

			foreach ($errors as $error)
			{
				print "OperationError\n";
				printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

				switch ($error->Code)
				{
					case 0:     // InternalError
						break;
					case 106:   // UserIsNotAuthorized
						break;
					case 1102:  // CampaignServiceInvalidAccountId
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
	print $e->getCode()." ".$e->getMessage()."\n\n";
	print $e->getTraceAsString()."\n\n";
}

function GetStores($proxy)
{
	$request = new GetBMCStoresByCustomerIdRequest();
	$response = $proxy->GetService()->GetBMCStoresByCustomerId($request);
	return $response->BMCStores->BMCStore;
}


// Adds a Bing Shopping campaign to the specified account. The
// CampaignType identifies the campaign as a Shopping campaign.

function AddCampaigns($proxy, $accountId, $bmcStoreId)
{
	$settings = array();

	$shoppingSetting = new ShoppingSetting();
	$shoppingSetting->Priority = 0;
	$shoppingSetting->SalesCountryCode = "US";
	$shoppingSetting->StoreId = $bmcStoreId;

	$encodedSetting = new SoapVar($shoppingSetting, SOAP_ENC_OBJECT, 'ShoppingSetting', $proxy->GetNamespace());
	$settings[] = $encodedSetting;

	$campaign = new Campaign();
	$campaign->Name = "Bing Shopping Campaign " . $_SERVER['REQUEST_TIME'];
	$campaign->Description = "Bing Shopping Campaign Example.";
	$campaign->BudgetType = BudgetLimitType::MonthlyBudgetSpendUntilDepleted;
	$campaign->MonthlyBudget = 1000.0;
	$campaign->DaylightSaving = true;
	$campaign->Settings = $settings;
	$campaign->CampaignType = CampaignType::Shopping;
	$campaign->TimeZone = "PacificTimeUSCanadaTijuana";

	$request = new AddCampaignsRequest();
	$request->AccountId = $accountId;
	$request->Campaigns = array();
	$request->Campaigns[] = $campaign;

	$response = $proxy->GetService()->AddCampaigns($request);

	return $response->CampaignIds;
}


// Add criterion to the campaign. The criterion is used to limit the campaign to a subset of
// your product catalog. For example, you can limit the catalog by brand, category, or product
// type. The campaign may be associated with only one ProductScope, and the ProductScope
// may contain a list of up to 7 ProductConditions. Each ad group may also specify
// more specific product conditions.

function AddCampaignCriterion($proxy, $campaignId)
{
	$request = new AddCampaignCriterionsRequest();
	$request->CriterionType = CampaignCriterionType::ProductScope;

	$criterion = new CampaignCriterion();
        $criterion->CampaignId = $campaignId;
	$criterion->BidAdjustment = null;  // Reserved for future use

	$productConditions = array();

	$condition = new ProductCondition();
	$condition->Operand = "Condition";
	$condition->Attribute = "New";
	$productConditions[] = $condition;

	$condition = new ProductCondition();
	$condition->Operand = "Brand";
	$condition->Attribute = "Contoso";
	$productConditions[] = $condition;

	$scope = new ProductScope();
	$scope->Conditions = $productConditions;

	$encodedScope = new SoapVar($scope, SOAP_ENC_OBJECT, 'ProductScope', $proxy->GetNamespace());
	$criterion->Criterion = $encodedScope;

	$request->CampaignCriterions = array();
	$request->CampaignCriterions[] = $criterion;

	return $proxy->GetService()->AddCampaignCriterions($request);
}


// Add a criterion to the ad group and then update it.

function AddAndUpdateAdGroupCriterion($proxy, $accountId, &$actions, $adGroupId)
{
	// Add a biddable criterion as the root.

	$condition = new ProductCondition();
	$condition->Operand = "All";
	$condition->Attribute = null;

	$root = AddPartition(
			$proxy,
			$adGroupId,
			null,
			$condition,
			ProductPartitionType::Unit,
			GetFixedBid($proxy, 0.35),
			false,
			$actions);

	printf("Applying a biddable criterion as the root...\n\n");
	$applyPartitionActionsResponse = ApplyPartitionActions($proxy, $actions);
	PrintCriterionIds($applyPartitionActionsResponse->AdGroupCriterionIds->long, $applyPartitionActionsResponse->PartialErrors);

	$adGroupCriterions = GetAdGroupCriterions(
			$proxy,
			$accountId,
			$adGroupId,
			CriterionType::ProductPartition);

	printf("Printing the ad group's product partition; contains only the tree root node\n\n");
	PrintProductPartitions($adGroupCriterions);

	// Update the bid of the root node that we just added.

	$updatedRoot = new BiddableAdGroupCriterion();
	$updatedRoot->Id = $applyPartitionActionsResponse->AdGroupCriterionIds->long[0];
	$updatedRoot->AdGroupId = $adGroupId;
	$updatedRoot->CriterionBid = GetFixedBid($proxy, 0.40);

	$encodedUpdateRoot = new SoapVar($updatedRoot, SOAP_ENC_OBJECT, 'BiddableAdGroupCriterion', $proxy->GetNamespace());

	$actions = array();  // clear

	AddPartitionAction($encodedUpdateRoot, ItemAction::Update, $actions);

	printf("Updating the bid for the tree root node...\n\n");

	$applyPartitionActionsResponse = ApplyPartitionActions($proxy, $actions);

	$adGroupCriterions = GetAdGroupCriterions(
			$proxy,
			$accountId,
			$adGroupId,
			CriterionType::ProductPartition);

	printf("Updated the bid for the tree root node\n\n");
	PrintProductPartitions($adGroupCriterions);
}


// Add a criterion to the ad group and then update it.

function AddBranchAndLeafCriterion($proxy, $accountId, &$actions, $adGroupId)
{
	$actions = array();  // clear

	$adGroupCriterions = GetAdGroupCriterions(
			$proxy,
			$accountId,
			$adGroupId,
			CriterionType::ProductPartition);

	$existingRoot = GetRootNode($adGroupCriterions);

	if (isset($existingRoot))
	{
		$nodeToDelete = new BiddableAdGroupCriterion();
		$nodeToDelete->Id = $existingRoot->Id;
		$nodeToDelete->AdGroupId = $existingRoot->AdGroupId;

		$encodedNodeToDelete = new SoapVar($nodeToDelete, SOAP_ENC_OBJECT, 'BiddableAdGroupCriterion', $proxy->GetNamespace());

		AddPartitionAction($encodedNodeToDelete, ItemAction::Delete, $actions);
	}

	$condition = new ProductCondition();
	$condition->Operand = "All";
	$condition->Attribute = null;

	$root = AddPartition(
			$proxy,
			$adGroupId,
			null,
			$condition,
			ProductPartitionType::Subdivision,
			null,
			false,
			$actions);

	$condition = new ProductCondition();
	$condition->Operand = "CategoryL1";
	$condition->Attribute = "Animals & Pet Supplies";

	$animalsSubdivision = AddPartition(
			$proxy,
			$adGroupId,
			$root,
			$condition,
			ProductPartitionType::Subdivision,
			null,
			false,
			$actions);

	$condition = new ProductCondition();
	$condition->Operand = "CategoryL2";
	$condition->Attribute = "Pet Supplies";

	$petSuppliesSubdivision = AddPartition(
			$proxy,
			$adGroupId,
			$animalsSubdivision,
			$condition,
			ProductPartitionType::Subdivision,
			null,
			false,
			$actions);

	$condition = new ProductCondition();
	$condition->Operand = "Brand";
	$condition->Attribute = "Brand A";

	$brandA = AddPartition(
			$proxy,
			$adGroupId,
			$petSuppliesSubdivision,
			$condition,
			ProductPartitionType::Unit,
			GetFixedBid($proxy, 0.35),
			false,
			$actions);

	$condition = new ProductCondition();
	$condition->Operand = "Brand";
	$condition->Attribute = "Brand B";

	$brandB = AddPartition(
			$proxy,
			$adGroupId,
			$petSuppliesSubdivision,
			$condition,
			ProductPartitionType::Unit,
			null,
			true,
			$actions);

	$condition = new ProductCondition();
	$condition->Operand = "Brand";
	$condition->Attribute = null;

	$otherBrands = AddPartition(
			$proxy,
			$adGroupId,
			$petSuppliesSubdivision,
			$condition,
			ProductPartitionType::Unit,
			GetFixedBid($proxy, 0.35),
			false,
			$actions);

	$condition = new ProductCondition();
	$condition->Operand = "CategoryL2";
	$condition->Attribute = null;

	$otherPetSupplies = AddPartition(
			$proxy,
			$adGroupId,
			$animalsSubdivision,
			$condition,
			ProductPartitionType::Unit,
			GetFixedBid($proxy, 0.35),
			false,
			$actions);

	$condition = new ProductCondition();
	$condition->Operand = "CategoryL1";
	$condition->Attribute = "Electronics";

	$electronics = AddPartition(
			$proxy,
			$adGroupId,
			$root,
			$condition,
			ProductPartitionType::Unit,
			GetFixedBid($proxy, 0.35),
			false,
			$actions);

	$condition = new ProductCondition();
	$condition->Operand = "CategoryL1";
	$condition->Attribute = null;

	$otherCategoryL1 = AddPartition(
			$proxy,
			$adGroupId,
			$root,
			$condition,
			ProductPartitionType::Unit,
			GetFixedBid($proxy, 0.35),
			false,
			$actions);

	printf("Applying product partitions to the ad group...\n\n");
	$applyPartitionActionsResponse = ApplyPartitionActions($proxy, $actions);

	$adGroupCriterions = GetAdGroupCriterions(
			$proxy,
			$accountId,
			$adGroupId,
			CriterionType::ProductPartition);

	printf("The product partition group tree now has 9 nodes\n\n");
	PrintProductPartitions($adGroupCriterions);

	return $applyPartitionActionsResponse;
}


// Deletes and updates branch and leaf criterion.

function UpdateBranchAndLeafCriterion($proxy, &$actions, $accountId, $adGroupId, $rootId, $electronicsCriterionId)
{
	$actions = array(); // clear;

	$electronics = new BiddableAdGroupCriterion();
	$electronics->Id = $electronicsCriterionId;
	$electronics->AdGroupId = $adGroupId;
	$encodedNodeToDelete = new SoapVar($electronics, SOAP_ENC_OBJECT, 'BiddableAdGroupCriterion', $proxy->GetNamespace());
	AddPartitionAction($encodedNodeToDelete, ItemAction::Delete, $actions);

	$parent = new BiddableAdGroupCriterion();
	$parent->Id = $rootId;
	$encodedParent = new SoapVar($parent, SOAP_ENC_OBJECT, 'BiddableAdGroupCriterion', $proxy->GetNamespace());

	$condition = new ProductCondition();
	$condition->Operand = "CategoryL1";
	$condition->Attribute = "Electronics";

	$electronicsSubdivision = AddPartition(
			$proxy,
			$adGroupId,
			$encodedParent,
			$condition,
			ProductPartitionType::Subdivision,
			null,
			false,
			$actions);

	$condition = new ProductCondition();
	$condition->Operand = "Brand";
	$condition->Attribute = "Brand C";

	$brandC = AddPartition(
			$proxy,
			$adGroupId,
			$electronicsSubdivision,
			$condition,
			ProductPartitionType::Unit,
			GetFixedBid($proxy, 0.35),
			false,
			$actions);

	$condition = new ProductCondition();
	$condition->Operand = "Brand";
	$condition->Attribute = "Brand D";

	$brandD = AddPartition(
			$proxy,
			$adGroupId,
			$electronicsSubdivision,
			$condition,
			ProductPartitionType::Unit,
			GetFixedBid($proxy, 0.35),
			false,
			$actions);

	$condition = new ProductCondition();
	$condition->Operand = "Brand";
	$condition->Attribute = null;

	$otherElectronicBrands = AddPartition(
			$proxy,
			$adGroupId,
			$electronicsSubdivision,
			$condition,
			ProductPartitionType::Unit,
			GetFixedBid($proxy, 0.35),
			false,
			$actions);

	printf("\nUpdating the electronics partition...\n");
	$applyPartitionActionsResponse = applyPartitionActions($proxy, $actions);

	$adGroupCriterions = GetAdGroupCriterions(
			$proxy,
			$accountId,
			$adGroupId,
			CriterionType::ProductPartition);

	printf("\nThe product partition group tree now has 12 nodes\n");
	PrintProductPartitions($adGroupCriterions);
}


// Add an ad group to the specified campaign.

function AddAdGroups($proxy, $campaignId)
{
	$request = new AddAdGroupsRequest();
	$request->CampaignId = $campaignId;

	$adGroup = new AdGroup();
	$adGroup->AdDistribution = AdDistribution::Search;
	$adGroup->BiddingModel = BiddingModel::Keyword;
	$adGroup->PricingModel = PricingModel::Cpc;
	$adGroup->StartDate = null;
	$adGroup->EndDate = new Date();
	$adGroup->EndDate->Month = 12;
	$adGroup->EndDate->Day = 31;
	$adGroup->EndDate->Year = 2016;
	$adGroup->Language = "English";
	$adGroup->Name = "Product Categories";

	$request->AdGroups[] = $adGroup;

	$response = $proxy->GetService()->AddAdGroups($request);

	return $response->AdGroupIds;
}


// Add the product ad to the ad group. Shopping campaigns must contain
// only Product Ads. If you try to add ads of other types, the call
// will fail.

function AddAds($proxy, $adGroupdId)
{
	$ad = new ProductAd();
	$ad->PromotionalText = "Free shipping on $99 purchases.";

	$encodedAd = new SoapVar($ad, SOAP_ENC_OBJECT, 'ProductAd', $proxy->GetNamespace());
	$ads[] = $encodedAd;

	$request = new AddAdsRequest();
	$request->AdGroupId = $adGroupdId;
	$request->Ads = $ads;

	return $proxy->GetService()->AddAds($request);
}


// Delete the Shopping campaign that we added to the account.

function DeleteCampaigns($proxy, $accountId, $campaignIds)
{
	$request = new DeleteCampaignsRequest();
	$request->AccountId = $accountId;
	$request->CampaignIds = $campaignIds;

	$proxy->GetService()->DeleteCampaigns($request);
}


// Get the root criterion node.

function GetRootNode($adGroupCriterions)
{
	$rootNode = null;

	foreach ($adGroupCriterions->AdGroupCriterion as $adGroupCriterion)
	{
		if (empty($adGroupCriterion->Criterion->ParentCriterionId))
		{
			$rootNode = $adGroupCriterion;
			break;
		}
	}

	return $rootNode;
}


// Gets a fixed bid object with the specified bid amount.

function GetFixedBid($proxy, $bidAmount)
{
	$fixedBid = new FixedBid();
	$fixedBid->Bid = new Bid();
	$fixedBid->Bid->Amount = $bidAmount;

	$encodedFixedBid = new SoapVar($fixedBid, SOAP_ENC_OBJECT, 'FixedBid', $proxy->GetNamespace());

	return $encodedFixedBid;
}


// Get the ad group's criterion.

function GetAdGroupCriterions(
		$proxy,
		$accountId,
		$adGroupId,
		$criterionType)
{
	$request = new GetAdGroupCriterionsByAdGroupIdRequest();
	$request->AccountId = $accountId;
	$request->AdGroupId = $adGroupId;
	$request->CriterionTypeFilter = $criterionType;

	return $proxy->GetService()->GetAdGroupCriterionsByAdGroupId($request)->AdGroupCriterions;
}


// Adds, updates, or deletes criterion for the ad group.
// All actions must be for the same ad group.

function ApplyPartitionActions($proxy, $actions) // AdGroupCriterionAction
{
	$request = new ApplyProductPartitionActionsRequest();
	$request->CriterionActions = $actions;
	return $proxy->GetService()->ApplyProductPartitionActions($request);  // ApplyProductPartitionActionsResponse
}


// Adds a criterion action to the list of actions.

function AddPartitionAction($criterion, $itemAction, &$actions)
{
	$partitionAction = new AdGroupCriterionAction();
	$partitionAction->Action = $itemAction;
	$partitionAction->AdGroupCriterion = $criterion;

	$actions[] = $partitionAction;
}


// Adds either a negative or biddable partition criterion.

function AddPartition(
		$proxy,
		$adGroupId,
		$parent,  		// AdGroupCriterion
		$condition,  	// ProductCondition
		$partitionType, // ProductPartitionType
		$bid, 			// FixedBid
		$isNegative,
		&$actions)
{
	global $ReferenceId;

	$adGroupCriterion = null;

	if ($isNegative)
	{
		$adGroupCriterion = new NegativeAdGroupCriterion();
	}
	else
	{
		$adGroupCriterion = new BiddableAdGroupCriterion();
		$adGroupCriterion->CriterionBid = $bid;
	}

	$adGroupCriterion->AdGroupId = $adGroupId;

	// Parent is encoded, so dereference enc_value.

	$criterion = new ProductPartition();
	$criterion->Condition = $condition;
	$criterion->ParentCriterionId = (($parent != null) ? $parent->enc_value->Id : null);

	if ($partitionType === ProductPartitionType::Subdivision)
	{
		$criterion->PartitionType = ProductPartitionType::Subdivision;  // Branch
		$adGroupCriterion->Id = $ReferenceId--;
	}
	else
	{
		$criterion->PartitionType = ProductPartitionType::Unit;  // Leaf
	}

	$encodedCriterion = new SoapVar($criterion, SOAP_ENC_OBJECT, 'ProductPartition', $proxy->GetNamespace());
	$adGroupCriterion->Criterion = $encodedCriterion;

	if ($isNegative)
	{
		$encodedAdGroupCriterion = new SoapVar($adGroupCriterion, SOAP_ENC_OBJECT, 'NegativeAdGroupCriterion', $proxy->GetNamespace());
	}
	else
	{
		$encodedAdGroupCriterion = new SoapVar($adGroupCriterion, SOAP_ENC_OBJECT, 'BiddableAdGroupCriterion', $proxy->GetNamespace());
	}


	AddPartitionAction($encodedAdGroupCriterion, ItemAction::Add, $actions);

	return $encodedAdGroupCriterion;
}


// Generates the ad group's partition tree that we then print.

function PrintProductPartitions($adGroupCriterions)
{
	$childBranches = array(); // Hash map (Long, List(AdGroupCriterion));
	$treeRoot = null;

	foreach ($adGroupCriterions->AdGroupCriterion as $adGroupCriterion)
	{
		$partition = $adGroupCriterion->Criterion;
		$childBranches[$adGroupCriterion->Id] = array();

		if (!empty($partition->ParentCriterionId))
		{
			$childBranches[$partition->ParentCriterionId][] = $adGroupCriterion;
		}
		else
		{
			$treeRoot = $adGroupCriterion;
		}
	}

	PrintProductPartitionTree($treeRoot, $childBranches, 0);
}


// Print the partition tree.

function PrintProductPartitionTree(
		$node,
		$childBranches,  // hash map (Long, List(AdGroupCriterion))
		$treeLevel)
{
	$criterion = $node->Criterion;  // ProductPartition

	printf("%" . (($treeLevel > 0) ? $treeLevel * 4 : "") . "s%s\n",
			"",
			$criterion->PartitionType);

	printf("%" . (($treeLevel > 0) ? $treeLevel * 4 : "") . "s%s%s\n",
			"",
			"ParentCriterionId: ",
			$criterion->ParentCriterionId);

	printf("%" . (($treeLevel > 0) ? $treeLevel * 4 : "") . "s%s%s\n",
			"",
			"Id: ",
			$node->Id);

	if ($criterion->PartitionType === ProductPartitionType::Unit)
	{
		if ($node->Type === "BiddableAdGroupCriterion") //instanceof BiddableAdGroupCriterion)
		{
			printf("%" . (($treeLevel > 0) ? $treeLevel * 4 : "") . "s%s%.2f\n",
					"",
					"Bid amount: ",
					$node->CriterionBid->Bid->Amount);  // ((FixedBid)((BiddableAdGroupCriterion)

		}
		else
		{
			if ($node->Type === "NegativeAdGroupCriterion")  // node instanceof NegativeAdGroupCriterion
			{
				printf("%" . $treeLevel * 4 . "s%s\n",
						"",
						"Not bidding on this condition");
			}
		}
	}

	$nullAttribute = (!empty($criterion->ParentCriterionId)) ? "(All Others)" : "(Tree Root)";

	printf("%" . (($treeLevel > 0) ? $treeLevel * 4 : "") . "s%s%s\n",
			"",
			"Attribute: ",
			(empty($criterion->Condition->Attribute)) ?
			$nullAttribute : $criterion->Condition->Attribute);

	printf("%" . (($treeLevel > 0) ? $treeLevel * 4 : "") . "s%s%s\n\n",
			"",
			"Condition: ",
			$criterion->Condition->Operand);

	foreach ($childBranches[$node->Id] as $childNode)  // AdGroupCriterion
	{
		PrintProductPartitionTree($childNode, $childBranches, $treeLevel + 1);
	}
}


// Prints the campaign identifiers of each campaign that we added.

function PrintCampaignIdentifiers($campaignIds)
{
	if (empty($campaignIds)) {
		return;
	}

	foreach ($campaignIds as $id)
	{
		printf("Successfully added Campaign, %s\n\n", $id);
	}
}


// Prints the ad group identifiers of each ad group that we added.

function PrintAdGroupIdentifiers($adGroupIds)
{
	if (empty($adGroupIds)) {
		return;
	}

	foreach ($adGroupIds as $id)
	{
		printf("Successfully added Ad Group, %s\n\n", $id);
	}
}



// Prints the ad identifiers of each ad that we added.

function PrintAdIdentifiers($adIds, $partialErrors)
{
	if (empty($adIds)) {
		return;
	}

	$count = count($adIds);

	for ($i = 0; $i < $count; $i++)
	{
		if (!empty($adIds[$i]))
		{
			// A shopping campaign should contain only product ads.

			printf("Successfully added a product ad with ID, %s\n\n",
				$adIds[$i]);
        }
		else
		{
			printf("Failed to add product ad at index, %d\n\n", $i);

			$error = $partialErrors->BatchError[$i];

			printf("\tIndex: %d\n", $error->Index);
			printf("\tCode: %d\n", $error->Code);
			printf("\tErrorCode: %s\n", $error->ErrorCode);
			printf("\tMessage: %s\n", $error->Message);

			// If the error is an editorial error, get more details.

			if ($error->Type === "EditorialError" && $error->ErrorCode === "CampaignServiceEditorialValidationError")
			{
				printf("\tDisapprovedText: %s\n", $error->DisapprovedText);
				printf("\tLocation: %s\n", $error->Location);
				printf("\tPublisherCountry: %s\n", $error->PublisherCountry);
				printf("\tReasonCode: %s\n", $error->ReasonCode);
			}
		}
	}
}


// Print the IDs of the criterion that we added to the ad group.

function PrintCriterionIds($criterionIds, $partialErrors)
{
	if (empty($criterionIds)) {
		return;
	}

	$count = count($criterionIds);

	for ($i = 0; $i < $count; $i++)
	{
		if (!empty($criterionIds[$i]))
		{
			printf("Successfully added criterion with ID, %s\n\n",
	        	$criterionIds[$i]);
		}
		else
		{
			printf("Failed to add criterion at index, %d\n\n", $i);

			$error = $partialErrors->BatchError[$i];

			printf("\tIndex: %d\n", $error->Index);
			printf("\tCode: %d\n", $error->Code);
			printf("\tErrorCode: %s\n", $error->ErrorCode);
			printf("\tMessage: %s\n", $error->Message);
		}
	}
}



// Prints the campaign criterion IDs of each criterion that we added.

function PrintCampaignCriterionIdentifiers($criterionIds, $partialErrors)
{
	if (empty($criterionIds)) {
		return;
	}

	$count = count($criterionIds);

	for ($i = 0; $i < $count; $i++)
	{
		if (!empty($criterionIds[$i]))
		{
			printf("Successfully added campaign criterion with ID, %s\n\n",
        		$criterionIds[$i]);
		}
		else
		{
			printf("Failed to add campaign criterion at index, %d\n\n", $i);

			$error = $partialErrors->BatchErrorCollection[$i];

			printf("\tIndex: %d\n", $error->Index);
			printf("\tCode: %d\n", $error->Code);
			printf("\tErrorCode: %s\n", $error->ErrorCode);
			printf("\tMessage: %s\n", $error->Message);

			if (!empty($error->BatchErrors->BatchError))
			{
				foreach ($error->BatchErrors->BatchError as $batchError)
				{
					printf("\tIndex: %d\n", $batchError->Index);
					printf("\tCode: %d\n", $batchError->Code);
					printf("\tErrorCode: %s\n", $batchError->ErrorCode);
					printf("\tMessage: %s\n\n", $batchError->Message);
				}
			}
		}
	}
}

?>
