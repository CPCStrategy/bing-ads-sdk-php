<?php

// Include the BingAds\v10 namespaced class file available
// for download at http://go.microsoft.com/fwlink/?LinkId=322147
include '../vendor/autoload.php';

// Specify the BingAds\CampaignManagement objects that will be used.
use BingAds\v10\CampaignManagement\AddCampaignsRequest;
use BingAds\v10\CampaignManagement\DeleteCampaignsRequest;
use BingAds\v10\CampaignManagement\AddAdGroupsRequest;
use BingAds\v10\CampaignManagement\AddTargetsToLibraryRequest;
use BingAds\v10\CampaignManagement\GetTargetsByIdsRequest;
use BingAds\v10\CampaignManagement\UpdateTargetsInLibraryRequest;
use BingAds\v10\CampaignManagement\GetTargetsInfoFromLibraryRequest;
use BingAds\v10\CampaignManagement\DeleteTargetFromAdGroupRequest;
use BingAds\v10\CampaignManagement\DeleteTargetFromCampaignRequest;
use BingAds\v10\CampaignManagement\DeleteTargetsFromLibraryRequest;
use BingAds\v10\CampaignManagement\SetTargetToAdGroupRequest;
use BingAds\v10\CampaignManagement\SetTargetToCampaignRequest;
use BingAds\v10\CampaignManagement\Campaign;
use BingAds\v10\CampaignManagement\AdGroup;
use BingAds\v10\CampaignManagement\AdGroupStatus;
use BingAds\v10\CampaignManagement\Target;
use BingAds\v10\CampaignManagement\AgeTarget;
use BingAds\v10\CampaignManagement\AgeTargetBid;
use BingAds\v10\CampaignManagement\DayTimeTarget;
use BingAds\v10\CampaignManagement\DayTimeTargetBid;
use BingAds\v10\CampaignManagement\DeviceOSTarget;
use BingAds\v10\CampaignManagement\DeviceOSTargetBid;
use BingAds\v10\CampaignManagement\GenderTarget;
use BingAds\v10\CampaignManagement\GenderTargetBid;
use BingAds\v10\CampaignManagement\LocationTarget;
use BingAds\v10\CampaignManagement\LocationTargetBid;
use BingAds\v10\CampaignManagement\CityTarget;
use BingAds\v10\CampaignManagement\CityTargetBid;
use BingAds\v10\CampaignManagement\CountryTarget;
use BingAds\v10\CampaignManagement\CountryTargetBid;
use BingAds\v10\CampaignManagement\MetroAreaTarget;
use BingAds\v10\CampaignManagement\MetroAreaTargetBid;
use BingAds\v10\CampaignManagement\PostalCodeTarget;
use BingAds\v10\CampaignManagement\PostalCodeTargetBid;
use BingAds\v10\CampaignManagement\RadiusTarget;
use BingAds\v10\CampaignManagement\RadiusTargetBid;
use BingAds\v10\CampaignManagement\StateTarget;
use BingAds\v10\CampaignManagement\StateTargetBid;
use BingAds\v10\CampaignManagement\TargetInfo;
use BingAds\v10\CampaignManagement\Bid;
use BingAds\v10\CampaignManagement\BudgetLimitType;
use BingAds\v10\CampaignManagement\AdDistribution;
use BingAds\v10\CampaignManagement\BiddingModel;
use BingAds\v10\CampaignManagement\PricingModel;
use BingAds\v10\CampaignManagement\Date;
use BingAds\v10\CampaignManagement\Day;
use BingAds\v10\CampaignManagement\Minute;
use BingAds\v10\CampaignManagement\HourRange;
use BingAds\v10\CampaignManagement\AgeRange;
use BingAds\v10\CampaignManagement\GenderType;
use BingAds\v10\CampaignManagement\DistanceUnit;
use BingAds\v10\CampaignManagement\IntentOption;

// Specify the BingAds\Proxy objects that will be used.
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


// Campaign Management WSDL

$wsdl = "https://campaign.api.bingads.microsoft.com/Api/Advertiser/CampaignManagement/V10/CampaignManagementService.svc?singleWsdl";

try
{
    $proxy = ClientProxy::ConstructWithAccountAndCustomerId($wsdl, $UserName, $Password, $DeveloperToken, $AccountId, $CustomerId, null);

    // Specify one or more campaigns.

    $campaigns = array();

    $campaign = new Campaign();
    $campaign->Name = "Winter Clothing " . $_SERVER['REQUEST_TIME'];
    $campaign->Description = "Winter clothing line.";
    $campaign->BudgetType = BudgetLimitType::MonthlyBudgetSpendUntilDepleted;
    $campaign->MonthlyBudget = 1000.00;
    $campaign->TimeZone = "PacificTimeUSCanadaTijuana";
    $campaign->DaylightSaving = true;

    $campaigns[] = $campaign;

    // Specify one or more ad groups.

    $adGroups = array();

    $endDate = new Date();
    $endDate->Day = 31;
    $endDate->Month = 12;
    $endDate->Year = 2015;

    $adGroup = new AdGroup();
    $adGroup->Name = "Women's Heated Ski Glove Sale";
    $adGroup->AdDistribution = AdDistribution::Search;
    $adGroup->BiddingModel = BiddingModel::Keyword;
    $adGroup->PricingModel = PricingModel::Cpc;
    $adGroup->StartDate = null;
    $adGroup->EndDate = $endDate;
    $adGroup->SearchBid = new Bid();
    $adGroup->SearchBid->Amount = 0.10;
    $adGroup->Language = "English";
    $adGroup->Status = AdGroupStatus::Paused;

    $adGroups[] = $adGroup;

    // Add the campaign, ad group

    $campaignIds = AddCampaigns($proxy, $AccountId, $campaigns);
    $adGroupIds = AddAdGroups($proxy, $campaignIds[0], $adGroups);

    // Print the new assigned campaign and ad group identifiers

    PrintCampaignIdentifiers($campaignIds);
    PrintAdGroupIdentifiers($adGroupIds);

    // Bing Ads API Version 9 supports both Target and Target objects. You should use Target.
    // This sample compares Target and Target, and demonstrates the impact of updating the
    // DayTimeTarget, IntentOption, and RadiusTarget nested in a Target object.

    $campaignTarget = new Target();
    $campaignTarget->Name = "My Campaign Target";

    $campaignDayTimeTarget = new DayTimeTarget();
    $campaignDayTimeTargetBid = new DayTimeTargetBid();
    $campaignDayTimeTargetBid->BidAdjustment = 10;
    $campaignDayTimeTargetBid->Day = Day::Monday;
    $campaignDayTimeTargetBid->FromHour = 1;
    $campaignDayTimeTargetBid->ToHour = 12;
    $campaignDayTimeTargetBid->FromMinute = Minute::Zero;
    $campaignDayTimeTargetBid->ToMinute = Minute::FortyFive;
    $campaignDayTimeTarget->Bids = array($campaignDayTimeTargetBid);
    $campaignTarget->DayTime = $campaignDayTimeTarget;

    $campaignDeviceOSTarget = new DeviceOSTarget();
    $campaignDeviceOSTargetBid = new DeviceOSTargetBid();
    $campaignDeviceOSTargetBid->BidAdjustment = 10;
    $campaignDeviceOSTargetBid->DeviceName = "Tablets";
    $campaignDeviceOSTarget->Bids = array($campaignDeviceOSTargetBid);
    $campaignTarget->DeviceOS = $campaignDeviceOSTarget;

    $campaignLocationTarget = new LocationTarget();
    $campaignLocationTarget->IntentOption = IntentOption::PeopleSearchingForOrViewingPages;

    $campaignRadiusTarget = new RadiusTarget();
    $campaignRadiusTargetBid = new RadiusTargetBid();
    $campaignRadiusTargetBid->BidAdjustment = 50;
    $campaignRadiusTargetBid->LatitudeDegrees = 47.755367;
    $campaignRadiusTargetBid->LongitudeDegrees = -122.091827;
    $campaignRadiusTargetBid->Radius = 5;
    $campaignRadiusTargetBid->RadiusUnit = DistanceUnit::Miles;
    $campaignRadiusTargetBid->IsExcluded = false;
    $campaignRadiusTarget->Bids = array($campaignRadiusTargetBid);
    $campaignLocationTarget->RadiusTarget = $campaignRadiusTarget;
    $campaignTarget->Location = $campaignLocationTarget;

    $adGroupTarget = new Target();
    $adGroupTarget->Name = "My Ad Group Target";

    $adGroupDayTimeTarget = new DayTimeTarget();
    $adGroupDayTimeTargetBid = new DayTimeTargetBid();
    $adGroupDayTimeTargetBid->BidAdjustment = 10;
    $adGroupDayTimeTargetBid->Day = Day::Friday;
    $adGroupDayTimeTargetBid->FromHour = 1;
    $adGroupDayTimeTargetBid->ToHour = 12;
    $adGroupDayTimeTargetBid->FromMinute = Minute::Zero;
    $adGroupDayTimeTargetBid->ToMinute = Minute::FortyFive;
    $adGroupDayTimeTarget->Bids = array($adGroupDayTimeTargetBid);
    $adGroupTarget->DayTime = $adGroupDayTimeTarget;

    // Each customer has a target library that can be used to set up targeting for any campaign
    // or ad group within the specified customer.

    // Add a target to the library and associate it with the campaign.
    $campaignTargetId = AddTargetsToLibrary($proxy, array($campaignTarget))->long[0];
    printf("Added Target Id: %d\n\n", $campaignTargetId);
    SetTargetToCampaign($proxy, $campaignIds[0], $campaignTargetId);
    printf("Associated CampaignId %s with TargetId %s.\n\n", $campaignIds[0], $campaignTargetId);

    // Get and print the Target with the GetTargetsByIds operation
    print "Get Campaign Target: \n\n";
    $targets = GetTargetsByIds($proxy, array($campaignTargetId));
    PrintTarget($targets->Target[0]);

    // Add a target to the library and associate it with the ad group.
    $adGroupTargetId = AddTargetsToLibrary($proxy, array($adGroupTarget))->long[0];
    printf("Added Target Id: %s\n\n", $adGroupTargetId);
    SetTargetToAdGroup($proxy, $adGroupIds[0], $adGroupTargetId);
    printf("Associated AdGroupId %s with TargetId %s.\n\n", $adGroupIds[0], $adGroupTargetId);

    // Get and print the Target with the GetTargetsByIds operation
    print "Get AdGroup Target: \n\n";
    $targets = GetTargetsByIds($proxy, array($adGroupTargetId));
    PrintTarget($targets->Target[0]);

    // Update the ad group's Target object with additional target types.
    // Existing target types such as DayTime must be specified
    // or they will not be included in the updated target.

    $target = new Target();
    $target->Id = $adGroupTargetId;
    $target->Name = "My Target";

    $ageTarget = new AgeTarget();
    $ageTargetBid = new AgeTargetBid();
    $ageTargetBid->BidAdjustment = 10;
    $ageTargetBid->Age = AgeRange::EighteenToTwentyFive;
    $ageTarget->Bids = array($ageTargetBid);
    $target->Age = $ageTarget;

    $dayTimeTarget = new DayTimeTarget();
    $dayTimeTargetBid = new DayTimeTargetBid();
    $dayTimeTargetBid->BidAdjustment = 10;
    $dayTimeTargetBid->Day = Day::Friday;
    $dayTimeTargetBid->FromHour = 1;
    $dayTimeTargetBid->ToHour = 12;
    $dayTimeTargetBid->FromMinute = Minute::Zero;
    $dayTimeTargetBid->ToMinute = Minute::FortyFive;
    $dayTimeTarget->Bids = array($dayTimeTargetBid);
    $target->DayTime = $dayTimeTarget;

    $deviceOSTarget = new DeviceOSTarget();
    $deviceOSTargetBid = new DeviceOSTargetBid();
    $deviceOSTargetBid->BidAdjustment = 10;
    $deviceOSTargetBid->DeviceName = "Tablets";
    $deviceOSTarget->Bids = array($deviceOSTargetBid);
    $target->DeviceOS = $deviceOSTarget;

    $genderTarget = new GenderTarget();
    $genderTargetBid = new GenderTargetBid();
    $genderTargetBid->BidAdjustment = 10;
    $genderTargetBid->Gender = GenderType::Female;
    $genderTarget->Bids = array($genderTargetBid);
    $target->Gender = $genderTarget;

    $locationTarget = new LocationTarget();
    $locationTarget->IntentOption = IntentOption::PeopleSearchingForOrViewingPages;

    $countryTarget = new CountryTarget();
    $countryTargetBid = new CountryTargetBid();
    $countryTargetBid->BidAdjustment = 10;
    $countryTargetBid->CountryAndRegion = "US";
    $countryTargetBid->IsExcluded = false;
    $countryTarget->Bids = array($countryTargetBid);
    $locationTarget->CountryTarget = $countryTarget;

    $postalCodeTarget = new PostalCodeTarget();
    $postalCodeTargetBid = new PostalCodeTargetBid();
    $postalCodeTargetBid->BidAdjustment = 10;
    $postalCodeTargetBid->PostalCode = "98052, WA US";
    $postalCodeTargetBid->IsExcluded = false;
    $postalCodeTarget->Bids = array($postalCodeTargetBid);
    $locationTarget->PostalCodeTarget = $postalCodeTarget;

    $radiusTarget = new RadiusTarget();
    $radiusTargetBid = new RadiusTargetBid();
    $radiusTargetBid->BidAdjustment = 50;
    $radiusTargetBid->LatitudeDegrees = 47.755367;
    $radiusTargetBid->LongitudeDegrees = -122.091827;
    $radiusTargetBid->Radius = 11;
    $radiusTargetBid->RadiusUnit = DistanceUnit::Miles;
    $radiusTargetBid->IsExcluded = false;
    $radiusTarget->Bids = array($radiusTargetBid);
    $locationTarget->RadiusTarget = $radiusTarget;
    $target->Location = $locationTarget;

    // Update the Target object associated with the ad group.
    UpdateTargetsInLibrary($proxy, array($target));
    print "Updated the ad group level target as a Target object.\n\n";

    // Get and print the Target with the GetTargetsByIds operation
    print "Get Campaign Target: \n\n";
    $targets = GetTargetsByIds($proxy, array($campaignTargetId));
    PrintTarget($targets->Target[0]);

    // Get and print the Target with the GetTargetsByIds operation
    print "Get AdGroup Target: \n\n";
    $targets = GetTargetsByIds($proxy, array($adGroupTargetId));
    PrintTarget($targets->Target[0]);

    // Get all new and existing targets in the customer library, whether or not they are
    // associated with campaigns or ad groups.

    $allTargetsInfo = GetTargetsInfoFromLibrary($proxy);
    print "All target identifiers and names from the customer library: \n\n";
    PrintTargetsInfo($allTargetsInfo->TargetInfo);

    // Delete the campaign, ad group, and targets that were previously added.
    // DeleteCampaigns would remove the campaign and ad group, as well as the association
    // between ad groups and campaigns. To explicitly delete the association between an entity
    // and the target, use DeleteTargetFromCampaign and DeleteTargetFromAdGroup respectively.

    DeleteTargetFromCampaign($proxy, $campaignIds[0]);
    DeleteTargetFromAdGroup($proxy, $adGroupIds[0]);

    DeleteCampaigns($proxy, $AccountId, array($campaignIds[0]));
    printf("Deleted CampaignId %s\n\n", $campaignIds[0]);

    // DeleteCampaigns deletes the association between the campaign and target, but does not
    // delete the target from the customer library.
    // Call the DeleteTargetsFromLibrary operation for each target that you want to delete.
    // You must specify an array with exactly one item.

    DeleteTargetsFromLibrary($proxy, array($campaignTargetId));
    printf("Deleted TargetId %s\n\n", $campaignTargetId);

    DeleteTargetsFromLibrary($proxy, array($adGroupTargetId));
    printf("Deleted TargetId %s\n\n", $adGroupTargetId);
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

// Adds one or more campaigns to the specified account.

function AddCampaigns($proxy, $accountId, $campaigns)
{
    $request = new AddCampaignsRequest();
    $request->AccountId = $accountId;
    $request->Campaigns = $campaigns;

    return $proxy->GetService()->AddCampaigns($request)->CampaignIds->long;
}

// Deletes one or more campaigns from the specified account.

function DeleteCampaigns($proxy, $accountId, $campaignIds)
{
    $request = new DeleteCampaignsRequest();
    $request->AccountId = $accountId;
    $request->CampaignIds = $campaignIds;

    $proxy->GetService()->DeleteCampaigns($request);
}

// Adds one or more ad groups to the specified campaign.

function AddAdGroups($proxy, $campaignId, $adGroups)
{
    $request = new AddAdGroupsRequest();
    $request->CampaignId = $campaignId;
    $request->AdGroups = $adGroups;

    return $proxy->GetService()->AddAdGroups($request)->AdGroupIds->long;
}

// Prints the campaign identifiers for each campaign added.

function PrintCampaignIdentifiers($campaignIds)
{
    if(count((array)$campaignIds) == 0)
    {
        return;
    }

    foreach ($campaignIds as $id)
    {
        printf("Campaign successfully added and assigned CampaignId %d\n\n", $id);
    }
}


// Prints the ad groupd identifiers for each ad group added.

function PrintAdGroupIdentifiers($adGroupIds)
{
    if(count((array)$adGroupIds) == 0)
    {
        return;
    }

    foreach ($adGroupIds as $id)
    {
        printf("AdGroup successfully added and assigned AdGroupId %d\n\n", $id);
    }
}

// Gets all target info from the customer library.

function GetTargetsInfoFromLibrary($proxy)
{
    $request = new GetTargetsInfoFromLibraryRequest();

    return $proxy->GetService()->GetTargetsInfoFromLibrary($request)->TargetsInfo;
}

// Gets the list of Target objects given the specified target identifiers.

function GetTargetsByIds($proxy, $targetIds)
{
    $request = new GetTargetsByIdsRequest();
    $request->TargetIds = $targetIds;

    return $proxy->GetService()->GetTargetsByIds($request)->Targets;
}

// Adds the specified Target object to the customer library.
// The operation requires exactly one Target in a list.

function AddTargetsToLibrary($proxy, $targets)
{
    $request = new AddTargetsToLibraryRequest();
    $request->Targets = $targets;

    return $proxy->GetService()->AddTargetsToLibrary($request)->TargetIds;
}

// Updates the specified Target object within the customer library.
// The operation requires exactly one Target in a list.

function UpdateTargetsInLibrary($proxy, $targets)
{
    $request = new UpdateTargetsInLibraryRequest();
    $request->Targets = $targets;

    $proxy->GetService()->UpdateTargetsInLibrary($request);
}

// Deletes the specified target from the customer library.
// The operation requires exactly one identifier in a list.

function DeleteTargetsFromLibrary($proxy, $targetIds)
{
    $request = new DeleteTargetsFromLibraryRequest();
    $request->TargetIds = $targetIds;

    $proxy->GetService()->DeleteTargetsFromLibrary($request);
}

// Removes the target association from the specified campaign.
// Does not delete the target or the campaign.

function DeleteTargetFromCampaign($proxy, $campaignId)
{
    $request = new DeleteTargetFromCampaignRequest();
    $request->CampaignId = $campaignId;

    $proxy->GetService()->DeleteTargetFromCampaign($request);
}

// Removes the target association from the specified ad group.
// Does not delete the target or the ad group.

function DeleteTargetFromAdGroup($proxy, $adGroupId)
{
    $request = new DeleteTargetFromAdGroupRequest();
    $request->AdGroupId = $adGroupId;

    $proxy->GetService()->DeleteTargetFromAdGroup($request);
}

// Associates the specified campaign and target.

function SetTargetToCampaign($proxy, $campaignId, $targetId)
{
    $request = new SetTargetToCampaignRequest();
    $request->CampaignId = $campaignId;
    $request->TargetId = $targetId;

    $proxy->GetService()->SetTargetToCampaign($request);
}

// Associates the specified ad group and target.

function SetTargetToAdGroup($proxy, $adGroupId, $targetId)
{
    $request = new SetTargetToAdGroupRequest();
    $request->AdGroupId = $adGroupId;
    $request->TargetId = $targetId;

    $proxy->GetService()->SetTargetToAdGroup($request);
}

// Prints the info for each target.

function PrintTargetsInfo($targetsInfo)
{
    if(count((array)$targetsInfo) == 0)
    {
        return;
    }

    foreach ($targetsInfo as $info)
    {
        printf("Target Id: %d\n", $info->Id);
        printf("Target Name: %s\n\n", $info->Name);
    }
}

// Prints the specified Target object.

function PrintTarget($target)
{
    if(count((array)$target) == 0)
    {
        return;
    }

    printf("Target Id: %d\n", $target->Id);
    printf("Target Name: %s\n\n", $target->Name);

    if (!is_null($target->Age))
    {
        print "AgeTarget:\n";
        foreach ($target->Age->Bids->AgeTargetBid as $bid)
        {
            printf("\tBidAdjustment: %d\n", $bid->BidAdjustment);
            printf("\tAge: %s\n\n", $bid->Age);
        }
    }
    if (!is_null($target->DayTime))
    {
        print "DayTimeTarget:\n";
        foreach ($target->DayTime->Bids->DayTimeTargetBid as $bid)
        {
            printf("\tBidAdjustment: %d\n", $bid->BidAdjustment);
            printf("\tDay: %s\n", $bid->Day);
            printf("\tFromHour: %s\n", $bid->FromHour);
            printf("\tToHour: %s\n", $bid->ToHour);
            printf("\tFromMinute: %s\n", $bid->FromMinute);
            printf("\tToMinute: %s\n\n", $bid->ToMinute);
        }
    }
    if (!is_null($target->DeviceOS))
    {
        print "DeviceOSTarget:\n";
        foreach ($target->DeviceOS->Bids->DeviceOSTargetBid as $bid)
        {
            printf("\tBidAdjustment: %d\n", $bid->BidAdjustment);
            printf("\tDeviceName: %s\n", $bid->DeviceName);
            print "\n";
        }
    }
    if (!is_null($target->Gender))
    {
        print "GenderTarget:\n";
        foreach ($target->Gender->Bids->GenderTargetBid as $bid)
        {
            printf("\tBidAdjustment: %d\n", $bid->BidAdjustment);
            printf("\tGender: %s\n\n", $bid->Gender);
        }
    }
    if (!is_null($target->Location))
    {
        print "LocationTarget:\n";
        printf("\tIntentOption: %s\n\n", $target->Location->IntentOption);
        if (!is_null($target->Location->CityTarget))
        {
            print "\tCityTarget:\n";
            foreach ($target->Location->CityTarget->Bids->CityTargetBid as $bid)
            {
                printf("\t\tBidAdjustment: %s\n", $bid->BidAdjustment);
                printf("\t\tCity: %s\n\n", $bid->City);
            }
        }
        if (!is_null($target->Location->CountryTarget))
        {
            print "\tCountryTarget:\n";
            foreach ($target->Location->CountryTarget->Bids->CountryTargetBid as $bid)
            {
                printf("\t\tBidAdjustment: %d\n", $bid->BidAdjustment);
                printf("\t\tCountryAndRegion: %s\n", $bid->CountryAndRegion);
                printf("\t\tIsExcluded: %s\n\n", $bid->IsExcluded ? "True" : "False");
            }
        }
        if (!is_null($target->Location->MetroAreaTarget))
        {
            print "\tMetroAreaTarget:\n";
            foreach ($target->Location->MetroAreaTarget->Bids->MetroAreaTargetBid as $bid)
            {
                printf("\t\tBidAdjustment: %d\n", $bid->BidAdjustment);
                printf("\t\tMetroArea: %s\n", $bid->MetroArea);
                printf("\t\tIsExcluded: %s\n\n", $bid->IsExcluded ? "True" : "False");
            }
        }
        if (!is_null($target->Location->PostalCodeTarget))
        {
            print "\tPostalCodeTarget:\n";
            foreach ($target->Location->PostalCodeTarget->Bids->PostalCodeTargetBid as $bid)
            {
                printf("\t\tBidAdjustment: %d\n", $bid->BidAdjustment);
                printf("\t\tPostalCode: %s\n", $bid->PostalCode);
                printf("\t\tIsExcluded: %s\n\n", $bid->IsExcluded ? "True" : "False");
            }
        }
        if (!is_null($target->Location->RadiusTarget))
        {
            print "\tRadiusTarget:\n";
            foreach ($target->Location->RadiusTarget->Bids->RadiusTargetBid as $bid)
            {
                printf("\t\tBidAdjustment: %d\n", $bid->BidAdjustment);
                printf("\t\tLatitudeDegrees: %f\n", $bid->LatitudeDegrees);
                printf("\t\tLongitudeDegrees: %f\n", $bid->LongitudeDegrees);
                printf("\t\tRadius: %s %s\n\n", $bid->Radius, $bid->RadiusUnit);
            }
        }
        if (!is_null($target->Location->StateTarget))
        {
            print "\tStateTarget:\n";
            foreach ($target->Location->StateTarget->Bids->StateTargetBid as $bid)
            {
                printf("\t\tBidAdjustment: %d\n", $bid->BidAdjustment);
                printf("\t\tState: %s\n", $bid->State);
                printf("\t\tIsExcluded: %s\n\n", $bid->IsExcluded ? "True" : "False");
            }
        }
    }

    print "\n";
}

?>
