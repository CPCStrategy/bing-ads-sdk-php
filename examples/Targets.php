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
use BingAds\CampaignManagement\AddCampaignsRequest;
use BingAds\CampaignManagement\DeleteCampaignsRequest;
use BingAds\CampaignManagement\AddAdGroupsRequest;
use BingAds\CampaignManagement\AddTargetsToLibraryRequest;
use BingAds\CampaignManagement\AddTargetsToLibrary2Request;
use BingAds\CampaignManagement\GetTargetsByIdsRequest;
use BingAds\CampaignManagement\GetTargetsByIds2Request;
use BingAds\CampaignManagement\UpdateTargetsInLibrary2Request;
use BingAds\CampaignManagement\GetTargetsInfoFromLibraryRequest;
use BingAds\CampaignManagement\DeleteTargetFromAdGroupRequest;
use BingAds\CampaignManagement\DeleteTargetFromCampaignRequest;
use BingAds\CampaignManagement\DeleteTargetsFromLibraryRequest;
use BingAds\CampaignManagement\SetTargetToAdGroupRequest;
use BingAds\CampaignManagement\SetTargetToCampaignRequest;
use BingAds\CampaignManagement\Campaign;
use BingAds\CampaignManagement\AdGroup;
use BingAds\CampaignManagement\AdGroupStatus;
use BingAds\CampaignManagement\Target;
use BingAds\CampaignManagement\Target2;
use BingAds\CampaignManagement\AgeTarget;
use BingAds\CampaignManagement\AgeTargetBid;
use BingAds\CampaignManagement\DayTarget;
use BingAds\CampaignManagement\DayTargetBid;
use BingAds\CampaignManagement\DayTimeTarget;
use BingAds\CampaignManagement\DayTimeTargetBid;
use BingAds\CampaignManagement\DeviceOSTarget;
use BingAds\CampaignManagement\DeviceOSTargetBid;
use BingAds\CampaignManagement\GenderTarget;
use BingAds\CampaignManagement\GenderTargetBid;
use BingAds\CampaignManagement\HourTarget;
use BingAds\CampaignManagement\HourTargetBid;
use BingAds\CampaignManagement\LocationTarget;
use BingAds\CampaignManagement\LocationTargetBid;
use BingAds\CampaignManagement\LocationTarget2;
use BingAds\CampaignManagement\LocationTargetBid2;
use BingAds\CampaignManagement\CityTarget;
use BingAds\CampaignManagement\CityTargetBid;
use BingAds\CampaignManagement\CountryTarget;
use BingAds\CampaignManagement\CountryTargetBid;
use BingAds\CampaignManagement\MetroAreaTarget;
use BingAds\CampaignManagement\MetroAreaTargetBid;
use BingAds\CampaignManagement\PostalCodeTarget;
use BingAds\CampaignManagement\PostalCodeTargetBid;
use BingAds\CampaignManagement\RadiusTarget;
use BingAds\CampaignManagement\RadiusTargetBid;
use BingAds\CampaignManagement\RadiusTarget2;
use BingAds\CampaignManagement\RadiusTargetBid2;
use BingAds\CampaignManagement\StateTarget;
use BingAds\CampaignManagement\StateTargetBid;
use BingAds\CampaignManagement\TargetInfo;
use BingAds\CampaignManagement\Bid;
use BingAds\CampaignManagement\BudgetLimitType;
use BingAds\CampaignManagement\AdDistribution;
use BingAds\CampaignManagement\BiddingModel;
use BingAds\CampaignManagement\PricingModel;
use BingAds\CampaignManagement\Date;
use BingAds\CampaignManagement\Day;
use BingAds\CampaignManagement\Minute;
use BingAds\CampaignManagement\HourRange;
use BingAds\CampaignManagement\AgeRange;
use BingAds\CampaignManagement\GenderType;
use BingAds\CampaignManagement\DistanceUnit;
use BingAds\CampaignManagement\IntentOption;

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

$wsdl = "https://api.bingads.microsoft.com/Api/Advertiser/CampaignManagement/V9/CampaignManagementService.svc?singleWsdl";

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
    $adGroup->BroadMatchBid = new Bid();
    $adGroup->BroadMatchBid->Amount = 0.10;
    $adGroup->ExactMatchBid = new Bid();
    $adGroup->ExactMatchBid->Amount = 0.09;
    $adGroup->PhraseMatchBid = new Bid();
    $adGroup->PhraseMatchBid->Amount = 0.07;
    $adGroup->Language = "English";
    $adGroup->Status = AdGroupStatus::Paused;

    $adGroups[] = $adGroup;

    // Add the campaign, ad group

    $campaignIds = AddCampaigns($proxy, $AccountId, $campaigns);
    $adGroupIds = AddAdGroups($proxy, $campaignIds[0], $adGroups);

    // Print the new assigned campaign and ad group identifiers

    PrintCampaignIdentifiers($campaignIds);
    PrintAdGroupIdentifiers($adGroupIds);

    // Bing Ads API Version 9 supports both Target and Target2 objects. You should use Target2.
    // This sample compares Target and Target2, and demonstrates the impact of updating the
    // DayTimeTarget, IntentOption, and RadiusTarget2 nested in a Target2 object.

    $campaignTarget = new Target();
    $campaignTarget->Name = "My Campaign Target";

    $campaignDayTarget = new DayTarget();
    $campaignDayTargetBid = new DayTargetBid();
    $campaignDayTargetBid->BidAdjustment = 10;
    $campaignDayTargetBid->Day = Day::Friday;
    $campaignDayTarget->Bids = array($campaignDayTargetBid);
    $campaignTarget->Day = $campaignDayTarget;

    $campaignHourTarget = new HourTarget();
    $campaignHourTargetBid = new HourTargetBid();
    $campaignHourTargetBid->BidAdjustment = 10;
    $campaignHourTargetBid->Hour = HourRange::ElevenAMToTwoPM;
    $campaignHourTarget->Bids = array($campaignHourTargetBid);
    $campaignTarget->Hour = $campaignHourTarget;

    $campaignLocationTarget = new LocationTarget();
    $campaignLocationTarget->HasPhysicalIntent = true;

    $campaignRadiusTarget = new RadiusTarget();
    $campaignRadiusTargetBid = new RadiusTargetBid();
    $campaignRadiusTargetBid->BidAdjustment = 50;
    $campaignRadiusTargetBid->LatitudeDegrees = 47.755367;
    $campaignRadiusTargetBid->LongitudeDegrees = -122.091827;
    $campaignRadiusTargetBid->Radius = 5;
    $campaignRadiusTargetBid->IsExcluded = false;
    $campaignRadiusTarget->Bids = array($campaignRadiusTargetBid);
    $campaignLocationTarget->RadiusTarget = $campaignRadiusTarget;
    $campaignTarget->Location = $campaignLocationTarget;

    $adGroupTarget = new Target();
    $adGroupTarget->Name = "My Ad Group Target";

    $adGroupHourTarget = new HourTarget();
    $adGroupHourTargetBid = new HourTargetBid();
    $adGroupHourTargetBid->BidAdjustment = 10;
    $adGroupHourTargetBid->Hour = HourRange::SixPMToElevenPM;
    $adGroupHourTarget->Bids = array($adGroupHourTargetBid);
    $adGroupTarget->Hour = $adGroupHourTarget;

    // Each customer has a target library that can be used to set up targeting for any campaign
    // or ad group within the specified customer.

    // Add a target to the library and associate it with the campaign.
    $campaignTargetId = AddTargetsToLibrary($proxy, array($campaignTarget))->long[0];
    printf("Added Target Id: %d\n\n", $campaignTargetId);
    SetTargetToCampaign($proxy, $campaignIds[0], $campaignTargetId);
    printf("Associated CampaignId %s with TargetId %s.\n\n", $campaignIds[0], $campaignTargetId);

    // Get and print the Target with the legacy GetTargetsByIds operation
    print "Get Campaign Target: \n\n";
    $targets = GetTargetsByIds($proxy, array($campaignTargetId));
    PrintTarget($targets->Target[0]);

    // Get and print the Target2 with the new GetTargetsByIds2 operation
    print "Get Campaign Target2: \n\n";
    $targets2 = GetTargetsByIds2($proxy, array($campaignTargetId));
    PrintTarget2($targets2->Target2[0]);

    // Add a target to the library and associate it with the ad group.
    $adGroupTargetId = AddTargetsToLibrary($proxy, array($adGroupTarget))->long[0];
    printf("Added Target Id: %s\n\n", $adGroupTargetId);
    SetTargetToAdGroup($proxy, $adGroupIds[0], $adGroupTargetId);
    printf("Associated AdGroupId %s with TargetId %s.\n\n", $adGroupIds[0], $adGroupTargetId);

    // Get and print the Target with the legacy GetTargetsByIds operation
    print "Get AdGroup Target: \n\n";
    $targets = GetTargetsByIds($proxy, array($adGroupTargetId));
    PrintTarget($targets->Target[0]);

    // Get and print the Target2 with the new GetTargetsByIds2 operation
    print "Get AdGroup Target2: \n\n";
    $targets2 = GetTargetsByIds2($proxy, array($adGroupTargetId));
    PrintTarget2($targets2->Target2[0]);

    // Update the ad group's target as a Target2 object with additional target types.
    // Existing target types such as DayTime, Location, and Radius must be specified
    // or they will not be included in the updated target.

    $target2 = new Target2();
    $target2->Id = $adGroupTargetId;
    $target2->Name = "My Target2";

    $ageTarget = new AgeTarget();
    $ageTargetBid = new AgeTargetBid();
    $ageTargetBid->BidAdjustment = 10;
    $ageTargetBid->Age = AgeRange::EighteenToTwentyFive;
    $ageTarget->Bids = array($ageTargetBid);
    $target2->Age = $ageTarget;

    $dayTimeTarget = new DayTimeTarget();
    $dayTimeTargetBid = new DayTimeTargetBid();
    $dayTimeTargetBid->BidAdjustment = 10;
    $dayTimeTargetBid->Day = Day::Friday;
    $dayTimeTargetBid->FromHour = 1;
    $dayTimeTargetBid->ToHour = 12;
    $dayTimeTargetBid->FromMinute = Minute::Zero;
    $dayTimeTargetBid->ToMinute = Minute::FortyFive;
    $dayTimeTarget->Bids = array($dayTimeTargetBid);
    $target2->DayTime = $dayTimeTarget;

    $deviceOSTarget = new DeviceOSTarget();
    $deviceOSTargetBid = new DeviceOSTargetBid();
    $deviceOSTargetBid->BidAdjustment = 20;
    $deviceOSTargetBid->DeviceName = "Tablets";
    $deviceOSTarget->Bids = array($deviceOSTargetBid);
    $target2->DeviceOS = $deviceOSTarget;

    $genderTarget = new GenderTarget();
    $genderTargetBid = new GenderTargetBid();
    $genderTargetBid->BidAdjustment = 10;
    $genderTargetBid->Gender = GenderType::Female;
    $genderTarget->Bids = array($genderTargetBid);
    $target2->Gender = $genderTarget;

    $locationTarget = new LocationTarget2();
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

    $radiusTarget = new RadiusTarget2();
    $radiusTargetBid = new RadiusTargetBid2();
    $radiusTargetBid->BidAdjustment = 50;
    $radiusTargetBid->LatitudeDegrees = 47.755367;
    $radiusTargetBid->LongitudeDegrees = -122.091827;
    $radiusTargetBid->Radius = 11;
    $radiusTargetBid->RadiusUnit = DistanceUnit::Kilometers;
    $radiusTargetBid->IsExcluded = false;
    $radiusTarget->Bids = array($radiusTargetBid);
    $locationTarget->RadiusTarget = $radiusTarget;
    $target2->Location = $locationTarget;

    // Update the same identified target as a Target2 object.
    // Going forward when getting the specified target Id, the Day and Hour elements of the legacy
    // Target object will be nil, since the target is being updated with a DayTime target.
    UpdateTargetsInLibrary2($proxy, array($target2));
    print "Updated the ad group level target as a Target2 object.\n\n";

    // Get and print the Target with the legacy GetTargetsByIds operation
    print "Get Campaign Target: \n\n";
    $targets = GetTargetsByIds($proxy, array($campaignTargetId));
    PrintTarget($targets->Target[0]);

    // Get and print the Target2 with the new GetTargetsByIds2 operation
    print "Get Campaign Target2: \n\n";
    $targets2 = GetTargetsByIds2($proxy, array($campaignTargetId));
    PrintTarget2($targets2->Target2[0]);

    // Get and print the Target with the legacy GetTargetsByIds operation
    print "Get AdGroup Target: \n\n";
    $targets = GetTargetsByIds($proxy, array($adGroupTargetId));
    PrintTarget($targets->Target[0]);

    // Get and print the Target2 with the new GetTargetsByIds2 operation
    print "Get AdGroup Target2: \n\n";
    $targets2 = GetTargetsByIds2($proxy, array($adGroupTargetId));
    PrintTarget2($targets2->Target2[0]);

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
    $request->LocationTargetVersion = "Latest";

    return $proxy->GetService()->GetTargetsByIds($request)->Targets;
}

// Gets the list of Target2 objects given the specified target identifiers.

function GetTargetsByIds2($proxy, $targetIds)
{
    $request = new GetTargetsByIds2Request();
    $request->TargetIds = $targetIds;
    $request->LocationTargetVersion = "Latest";

    return $proxy->GetService()->GetTargetsByIds2($request)->Targets;
}

// Adds the specified Target object to the customer library.
// The operation requires exactly one Target in a list.

function AddTargetsToLibrary($proxy, $targets)
{
    $request = new AddTargetsToLibraryRequest();
    $request->Targets = $targets;

    return $proxy->GetService()->AddTargetsToLibrary($request)->TargetIds;
}

// Adds the specified Target2 object to the customer library.
// The operation requires exactly one Target in a list.

function AddTargetsToLibrary2($proxy, $targets)
{
    $request = new AddTargetsToLibrary2Request();
    $request->Targets = $targets;

    return $proxy->GetService()->AddTargetsToLibrary2($request)->TargetIds;
}

// Updates the specified Target2 object within the customer library.
// The operation requires exactly one Target2 in a list.

function UpdateTargetsInLibrary2($proxy, $targets)
{
    $request = new UpdateTargetsInLibrary2Request();
    $request->Targets = $targets;

    $proxy->GetService()->UpdateTargetsInLibrary2($request);
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
    if (!is_null($target->Day))
    {
        print "DayTarget:\n";
        foreach ($target->Day->Bids->DayTargetBid as $bid)
        {
            printf("\tBidAdjustment: %d\n", $bid->BidAdjustment);
            printf("\tDay: %s\n\n", $bid->Day);
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
    if (!is_null($target->Hour))
    {
        print "HourTarget:\n";
        foreach ($target->Hour->Bids->HourTargetBid as $bid)
        {
            printf("\tBidAdjustment: %d\n", $bid->BidAdjustment);
            printf("\tHour: %s\n\n", $bid->Hour);
        }
    }
    if (!is_null($target->Location))
    {
        print "LocationTarget:\n";
        printf("\tHasPhysicalIntent: %s\n\n", (true == $target->Location->HasPhysicalIntent) ? "true" : "false");
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
        if (!is_null($target->Location->RadiusTarget))
        {
            print "\tRadiusTarget:\n";
            foreach ($target->Location->RadiusTarget->Bids->RadiusTargetBid as $bid)
            {
                printf("\t\tBidAdjustment: %d\n", $bid->BidAdjustment);
                printf("\t\tLatitudeDegrees: %f\n", $bid->LatitudeDegrees);
                printf("\t\tLongitudeDegrees: %f\n", $bid->LongitudeDegrees);
                printf("\t\tRadius: %d Miles\n\n", $bid->Radius);
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

// Prints the specified Target2 object.

function PrintTarget2($target)
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
        print "LocationTarget2:\n";
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
            print "\tRadiusTarget2:\n";
            foreach ($target->Location->RadiusTarget->Bids->RadiusTargetBid2 as $bid)
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
