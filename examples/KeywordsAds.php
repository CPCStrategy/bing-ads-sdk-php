<?php

// Include the BingAds\v10 namespaced class file available
// for download at http://go.microsoft.com/fwlink/?LinkId=322147
include '../vendor/autoload.php';

// Specify the BingAds\CampaignManagement objects that will be used.
use BingAds\v10\CampaignManagement\AddCampaignsRequest;
use BingAds\v10\CampaignManagement\DeleteCampaignsRequest;
use BingAds\v10\CampaignManagement\AddAdGroupsRequest;
use BingAds\v10\CampaignManagement\AddKeywordsRequest;
use BingAds\v10\CampaignManagement\AddAdsRequest;
use BingAds\v10\CampaignManagement\Campaign;
use BingAds\v10\CampaignManagement\AdGroup;
use BingAds\v10\CampaignManagement\Keyword;
use BingAds\v10\CampaignManagement\Ad;
use BingAds\v10\CampaignManagement\TextAd;
use BingAds\v10\CampaignManagement\Bid;
use BingAds\v10\CampaignManagement\MatchType;
use BingAds\v10\CampaignManagement\BudgetLimitType;
use BingAds\v10\CampaignManagement\AdDistribution;
use BingAds\v10\CampaignManagement\BiddingModel;
use BingAds\v10\CampaignManagement\PricingModel;
use BingAds\v10\CampaignManagement\Date;
use BingAds\v10\CampaignManagement\CustomParameters;
use BingAds\v10\CampaignManagement\CustomParameter;

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
    $proxy = ClientProxy::ConstructWithAccountAndCustomerId($wsdl, $UserName, $Password, $DeveloperToken, $AccountId, null, null);

    // Specify one or more campaigns.

    $campaigns = array();

    $campaign = new Campaign();
    $campaign->Name = "Winter Clothing " . $_SERVER['REQUEST_TIME'];
    $campaign->Description = "Winter clothing line.";
    $campaign->BudgetType = BudgetLimitType::MonthlyBudgetSpendUntilDepleted;
    $campaign->MonthlyBudget = 1000.00;
    $campaign->TimeZone = "PacificTimeUSCanadaTijuana";
    $campaign->DaylightSaving = true;

    // Used with FinalUrls shown in the ads that we will add below.
    $campaign->TrackingUrlTemplate =
       "http://tracker.example.com/?season={_season}&promocode={_promocode}&u={lpurl}";

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
    $adGroup->SearchBid->Amount = 0.07;
    $adGroup->Language = "English";

    // You could use a tracking template which would override the campaign level
    // tracking template. Tracking templates defined for lower level entities
    // override those set for higher level entities.
    // In this example we are using the campaign level tracking template.
    $adGroup->TrackingUrlTemplate = null;

    $adGroups[] = $adGroup;

    // In this example only the second keyword should succeed. The Text of the first keyword exceeds the limit,
    // and the third keyword is a duplicate of the second keyword.

    $keywords = array();

    $keyword = new Keyword();
    $keyword->Bid = new Bid();
    $keyword->Bid->Amount = 0.47;
    $keyword->Param2 = "10% Off";
    $keyword->MatchType = MatchType::Broad;
    $keyword->Text = "Brand-A Gloves Brand-A Gloves Brand-A Gloves Brand-A Gloves Brand-A Gloves " .
                     "Brand-A Gloves Brand-A Gloves Brand-A Gloves Brand-A Gloves Brand-A Gloves " .
                     "Brand-A Gloves Brand-A Gloves Brand-A Gloves Brand-A Gloves Brand-A Gloves";
    $keywords[] = $keyword;

    $keyword = new Keyword();
    $keyword->Bid = new Bid();
    $keyword->Bid->Amount = 0.47;
    $keyword->Param2 = "10% Off";
    $keyword->MatchType = MatchType::Phrase;
    $keyword->Text = "Brand-A Gloves";
    $keywords[] = $keyword;

    $keyword = new Keyword();
    $keyword->Bid = new Bid();
    $keyword->Bid->Amount = 0.47;
    $keyword->Param2 = "10% Off";
    $keyword->MatchType = MatchType::Phrase;
    $keyword->Text = "Brand-A Gloves";
    $keywords[] = $keyword;

    // In this example only the first 3 ads should succeed.
    // The Title of the fourth ad is empty and not valid,
    // and the fifth ad is a duplicate of the second ad.

    $ads = array();

    for ($i = 0; $i < 5; $i++)
    {
        $textAd = new TextAd();
        $textAd->Text = "Huge Savings on women's shoes.";
        $textAd->DisplayUrl = "Contoso.com";

        // Destination URLs are deprecated and will be sunset in March 2016.
        // If you are currently using the Destination URL, you must upgrade to Final URLs.
        // Here is an example of a DestinationUrl you might have used previously.
        // $textAd->DestinationUrl = "http://www.contoso.com/womenshoesale/?season=spring&promocode=PROMO123";

        // To migrate from DestinationUrl to FinalUrls for existing ads, you can set DestinationUrl
        // to an empty string when updating the ad. If you are removing DestinationUrl,
        // then FinalUrls is required.
        // $textAd->DestinationUrl = "";

        // With FinalUrls you can separate the tracking template, custom parameters, and
        // landing page URLs.

        $textAd->FinalUrls = array();
        $textAd->FinalUrls[] = "http://www.contoso.com/womenshoesale";

        // Final Mobile URLs can also be used if you want to direct the user to a different page
        // for mobile devices.
        $textAd->FinalMobileUrls = array();
        $textAd->FinalMobileUrls[] = "http://mobile.contoso.com/womenshoesale";

        // You could use a tracking template which would override the campaign level
        // tracking template. Tracking templates defined for lower level entities
        // override those set for higher level entities.
        // In this example we are using the campaign level tracking template.
        $textAd->TrackingUrlTemplate = null;

        // Set custom parameters that are specific to this ad,
        // and can be used by the ad, ad group, campaign, or account level tracking template.
        // In this example we are using the campaign level tracking template.
        $textAd->UrlCustomParameters = new CustomParameters();
        $textAd->UrlCustomParameters->Parameters = array();
        $customParameter1 = new CustomParameter();
        $customParameter1->Key = "promoCode";
        $customParameter1->Value = "PROMO" . ($i+1);
        $textAd->UrlCustomParameters->Parameters[] = $customParameter1;
        $customParameter2 = new CustomParameter();
        $customParameter2->Key = "season";
        $customParameter2->Value = "summer";
        $textAd->UrlCustomParameters->Parameters[] = $customParameter2;

        $ads[] = new SoapVar($textAd, SOAP_ENC_OBJECT, 'TextAd', $proxy->GetNamespace());
    }

    $ads[0]->enc_value->Title = "Women's Shoe Sale";
    $ads[1]->enc_value->Title = "Women's Super Shoe Sale";
    $ads[2]->enc_value->Title = "Women's Red Shoe Sale";
    $ads[3]->enc_value->Title = "";
    $ads[4]->enc_value->Title = "Women's Super Shoe Sale";

    // Add the campaign, ad group, keywords, and ads

    $campaignIds = AddCampaigns($proxy, $AccountId, $campaigns);
    $adGroupIds = AddAdGroups($proxy, $campaignIds[0], $adGroups);

    $addKeywordsResponse = AddKeywords($proxy, $adGroupIds[0], $keywords);
    $keywordIds = $addKeywordsResponse->KeywordIds->long;
    $keywordErrors = $addKeywordsResponse->PartialErrors->BatchError;

    $addAdsResponse = AddAds($proxy, $adGroupIds[0], $ads);
    $adIds = $addAdsResponse->AdIds->long;
    $adErrors = $addAdsResponse->PartialErrors->BatchError;

    // Print the new assigned campaign and ad group identifiers

    PrintCampaignIdentifiers($campaignIds);
    PrintAdGroupIdentifiers($adGroupIds);

    // Print the new assigned keyword and ad identifiers, as well as any partial errors

    PrintKeywordResults($keywords, $keywordIds, $keywordErrors);
    PrintAdResults($ads, $adIds, $adErrors);

    // Delete the campaign, ad group, keyword, and ad that were previously added.
    // You should remove this line if you want to view the added entities in the
    // Bing Ads web application or another tool.

    DeleteCampaigns($proxy, $AccountId, array($campaignIds[0]));
    printf("Deleted CampaignId %d\n\n", $campaignIds[0]);
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
    // Set the request information.

    $request = new AddCampaignsRequest();
    $request->AccountId = $accountId;
    $request->Campaigns = $campaigns;

    return $proxy->GetService()->AddCampaigns($request)->CampaignIds->long;
}

// Deletes one or more campaigns from the specified account.

function DeleteCampaigns($proxy, $accountId, $campaignIds)
{
    // Set the request information.

    $request = new DeleteCampaignsRequest();
    $request->AccountId = $accountId;
    $request->CampaignIds = $campaignIds;

    $proxy->GetService()->DeleteCampaigns($request);
}

// Adds one or more ad groups to the specified campaign.

function AddAdGroups($proxy, $campaignId, $adGroups)
{
    // Set the request information.

    $request = new AddAdGroupsRequest();
    $request->CampaignId = $campaignId;
    $request->AdGroups = $adGroups;

    return $proxy->GetService()->AddAdGroups($request)->AdGroupIds->long;
}

// Adds one or more keywords to the specified ad group.

function AddKeywords($proxy, $adGroupId, $keywords)
{
    // Set the request information.

    $request = new AddKeywordsRequest();
    $request->AdGroupId = $adGroupId;
    $request->Keywords = $keywords;

    return $proxy->GetService()->AddKeywords($request);
}

// Adds one or more ads to the specified ad group.

function AddAds($proxy, $adGroupId, $ads)
{
    // Set the request information.

    $request = new AddAdsRequest();
    $request->AdGroupId = $adGroupId;
    $request->Ads = $ads;

    return $proxy->GetService()->AddAds($request);
}

// Prints the campaign identifiers for each campaign added.

function PrintCampaignIdentifiers($campaignIds)
{
    if(empty($campaignIds))
    {
        return;
    }

    foreach ($campaignIds as $id)
    {
        printf("Campaign successfully added and assigned CampaignId %s\n\n", $id);
    }
}


// Prints the ad groupd identifiers for each ad group added.

function PrintAdGroupIdentifiers($adGroupIds)
{
    if(empty($adGroupIds))
    {
        return;
    }

    foreach ($adGroupIds as $id)
    {
        printf("AdGroup successfully added and assigned AdGroupId %s\n\n", $id);
    }
}


// Prints the keyword identifiers, as well as any partial errors

function PrintKeywordResults($keywords, $keywordIds, $partialErrors)
{
    if(empty($keywordIds))
    {
        return;
    }

    // Print the identifier of each successfully added keyword.

    for ($index = 0; $index < count($keywords); $index++ )
    {
        // The array of keyword identifiers equals the size of the attempted keywords. If the element
        // is not empty, the keyword at that index was added successfully and has a keyword identifer.

        if (!empty($keywordIds[$index]))
        {
            printf("Keyword[%d] (Text:%s) successfully added and assigned KeywordId %s\n",
                $index,
                $keywords[$index]->Text,
                $keywordIds[$index] );
        }
    }

    // Print the error details for any keyword not successfully added.
    // Note also that multiple error reasons may exist for the same attempted keyword.

    foreach ($partialErrors as $error)
    {
        // The index of the partial errors is equal to the index of the list
        // specified in the call to AddKeywords.

        printf("\nKeyword[%d] (Text:%s) not added due to the following error:\n", $error->Index, $keywords[$error->Index]->Text);

        printf("\tIndex: %d\n", $error->Index);
        printf("\tCode: %d\n", $error->Code);
        printf("\tErrorCode: %s\n", $error->ErrorCode);
        printf("\tMessage: %s\n", $error->Message);

        // In the case of an EditorialError, more details are available

        if ($error->Type == "EditorialError" && $error->ErrorCode == "CampaignServiceEditorialValidationError")
        {
            printf("\tDisapprovedText: %s\n", $error->DisapprovedText);
            printf("\tLocation: %s\n", $error->Location);
            printf("\tPublisherCountry: %s\n", $error->PublisherCountry);
            printf("\tReasonCode: %d\n", $error->ReasonCode);
        }
    }

    print "\n";
}


// Prints the ad identifiers, as well as any partial errors

function PrintAdResults($ads, $adIds, $partialErrors)
{
    if(empty($adIds))
    {
        return;
    }

    $attributeValues = array();

    // Print the identifier of each successfully added ad.

    for ($index = 0; $index < count($ads); $index++ )
    {
        // Determine the type of ad. Prepare the corresponding attribute value to be printed,
        // both for successful new ads and partial errors.

        if($ads[$index]->enc_stype === "TextAd")
        {
            $attributeValues[] = "Title:" . $ads[$index]->enc_value->Title;
        }
        else if($ads[$index]->enc_stype === "ProductAd")
        {
            $attributeValues[] = "PromotionalText:" . $ads[$index]->enc_value->PromotionalText;
        }
        else
        {
            $attributeValues[] = "Unknown Ad Type";
        }

        // The array of ad identifiers equals the size of the attempted ads. If the element
        // is not empty, the ad at that index was added successfully and has an ad identifer.

        if (!empty($adIds[$index]))
        {
            printf("Ad[%d] (%s) successfully added and assigned AdId %s\n",
                $index,
                $attributeValues[$index],
                $adIds[$index] );

            print "DestinationUrl: " . $ads[$index]->enc_value->DestinationUrl . "\n";
            print("FinalMobileUrls: \n");
            foreach ($ads[$index]->enc_value->FinalMobileUrls as $finalMobileUrl)
            {
                print("\t" . $finalMobileUrl . "\n");
            }
            print("FinalUrls: \n");
            foreach ($ads[$index]->enc_value->FinalUrls as $finalUrl)
            {
                print("\t" . $finalUrl . "\n");
            }
            print("TrackingUrlTemplate: " . $ads[$index]->enc_value->TrackingUrlTemplate . "\n");
            print("UrlCustomParameters: \n");
            if ($ads[$index]->enc_value->UrlCustomParameters != null && $ads[$index]->enc_value->UrlCustomParameters->Parameters != null)
            {
                foreach ($ads[$index]->enc_value->UrlCustomParameters->Parameters as $customParameter)
                {
                    print("\tKey: " . $customParameter->Key . "\n");
                    print("\tValue: " . $customParameter->Value . "\n");
                }
            }
            print "\n";
        }
    }


    // Print the error details for any ad not successfully added.
    // Note also that multiple error reasons may exist for the same attempted ad.

    foreach ($partialErrors as $error)
    {
        // The index of the partial errors is equal to the index of the list
        // specified in the call to AddAds.

        printf("\nAd[%d] (%s) not added due to the following error:\n", $error->Index, $attributeValues[$error->Index]);

        printf("\tIndex: %d\n", $error->Index);
        printf("\tCode: %d\n", $error->Code);
        printf("\tErrorCode: %s\n", $error->ErrorCode);
        printf("\tMessage: %s\n", $error->Message);

        // In the case of an EditorialError, more details are available

        if ($error->Type == "EditorialError" && $error->ErrorCode == "CampaignServiceEditorialValidationError")
        {
            printf("\tDisapprovedText: %s\n", $error->DisapprovedText);
            printf("\tLocation: %s\n", $error->Location);
            printf("\tPublisherCountry: %s\n", $error->PublisherCountry);
            printf("\tReasonCode: %d\n", $error->ReasonCode);
        }
    }

    print "\n";
}

?>
