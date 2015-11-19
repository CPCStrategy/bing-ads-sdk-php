<?php

// Include the BingAds\v10 namespaced class files available
// for download at http://go.microsoft.com/fwlink/?LinkId=322147
include '../vendor/autoload.php';

// Specify the BingAds\CampaignManagement objects that will be used.
use BingAds\v10\CampaignManagement\AddCampaignsRequest;
use BingAds\v10\CampaignManagement\Campaign;
use BingAds\v10\CampaignManagement\BudgetLimitType;
use BingAds\v10\CampaignManagement\AddAdExtensionsRequest;
use BingAds\v10\CampaignManagement\AdExtension;
use BingAds\v10\CampaignManagement\AppAdExtension;
use BingAds\v10\CampaignManagement\CallAdExtension;
use BingAds\v10\CampaignManagement\LocationAdExtension;
use BingAds\v10\CampaignManagement\SiteLinksAdExtension;
use BingAds\v10\CampaignManagement\AdExtensionAssociation;
use BingAds\v10\CampaignManagement\AdExtensionAssociationCollection;
use BingAds\v10\CampaignManagement\AdExtensionEditorialReason;
use BingAds\v10\CampaignManagement\AdExtensionEditorialReasonCollection;
use BingAds\v10\CampaignManagement\AdExtensionEditorialStatus;
use BingAds\v10\CampaignManagement\AdExtensionIdentity;
use BingAds\v10\CampaignManagement\AdExtensionIdToEntityIdAssociation;
use BingAds\v10\CampaignManagement\AdExtensionStatus;
use BingAds\v10\CampaignManagement\AdExtensionsTypeFilter;
use BingAds\v10\CampaignManagement\DeleteAdExtensionsRequest;
use BingAds\v10\CampaignManagement\DeleteAdExtensionsAssociationsRequest;
use BingAds\v10\CampaignManagement\GetAdExtensionsByIdsRequest;
use BingAds\v10\CampaignManagement\GetAdExtensionsEditorialReasonsRequest;
use BingAds\v10\CampaignManagement\SetAdExtensionsAssociationsRequest;
use BingAds\v10\CampaignManagement\Address;
use BingAds\v10\CampaignManagement\SiteLink;
use BingAds\v10\CampaignManagement\AssociationType;
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

$ids = null;


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

    // Used with FinalUrls shown in the sitelinks that we will add below.
    $campaign->TrackingUrlTemplate =
        "http://tracker.example.com/?season={_season}&promocode={_promocode}&u={lpurl}";

    $campaigns[] = $campaign;

    $campaignIds = AddCampaigns($proxy, $AccountId, $campaigns);

    // Specify the extensions.

    $adExtensions = array();

    // Specify an app extension.

    $extension = new AppAdExtension();
    $extension->AppPlatform = "Windows";
    $extension->AppStoreId="AppStoreIdGoesHere";
    $extension->DisplayText= "Contoso";
    $extension->DestinationUrl="DestinationUrlGoesHere";

    $encodedExtension = new SoapVar($extension, SOAP_ENC_OBJECT, 'AppAdExtension', $proxy->GetNamespace());
    $adExtensions[] = $encodedExtension;

    // Specify a call extension.

    $extension = new CallAdExtension();
    $extension->CountryCode = "US";
    $extension->PhoneNumber = "2065550100";
    $extension->IsCallOnly = false;

    $encodedExtension = new SoapVar($extension, SOAP_ENC_OBJECT, 'CallAdExtension', $proxy->GetNamespace());
    $adExtensions[] = $encodedExtension;

    // Specify a location extension.

    $extension = new LocationAdExtension();
    $extension->PhoneNumber = "206-555-0100";
    $extension->CompanyName = "Alpine Ski House";
    $extension->IconMediaId = null;  // Using the default map icon
    $extension->ImageMediaId = null;
    $extension->Address = new Address;
    $extension->Address->StreetAddress = "1234 Washington Place";
    $extension->Address->StreetAddress2 = "Suite 1210";
    $extension->Address->CityName = "Woodinville";
    $extension->Address->ProvinceName = "WA"; // Can contain the state name or code (e.g. WA)
    $extension->Address->CountryCode = "US";
    $extension->Address->PostalCode = "98608";

    $encodedExtension = new SoapVar($extension, SOAP_ENC_OBJECT, 'LocationAdExtension', $proxy->GetNamespace());
    $adExtensions[] = $encodedExtension;

    // Specify a site link extension.

    $extension = new SiteLinksAdExtension();
    $extension->SiteLinks = array();

    for ($i = 0; $i < 2; $i++)
    {
        $extension->SiteLinks[$i] = new SiteLink();
        $extension->SiteLinks[$i]->DisplayText = "Women's Shoe Sale " . ($i+1);

        // Destination URLs are deprecated and will be sunset in March 2016.
        // If you are currently using the Destination URL, you must upgrade to Final URLs.
        // Here is an example of a DestinationUrl you might have used previously.
        // $extension->SiteLinks[$i]->DestinationUrl = "http://www.contoso.com/womenshoesale/?season=spring&promocode=PROMO123";

        // To migrate from DestinationUrl to FinalUrls for existing sitelinks, you can set DestinationUrl
        // to an empty string when updating the sitelink. If you are removing DestinationUrl,
        // then FinalUrls is required.
        // $extension->SiteLinks[$i]->DestinationUrl = "";

        // With FinalUrls you can separate the tracking template, custom parameters, and
        // landing page URLs.

        $extension->SiteLinks[$i]->FinalUrls = array();
        $extension->SiteLinks[$i]->FinalUrls[] = "http://www.contoso.com/womenshoesale";

        // Final Mobile URLs can also be used if you want to direct the user to a different page
        // for mobile devices.
        $extension->SiteLinks[$i]->FinalMobileUrls = array();
        $extension->SiteLinks[$i]->FinalMobileUrls[] = "http://mobile.contoso.com/womenshoesale";

        // You could use a tracking template which would override the campaign level
        // tracking template. Tracking templates defined for lower level entities
        // override those set for higher level entities.
        // In this example we are using the campaign level tracking template.
        $extension->SiteLinks[$i]->TrackingUrlTemplate = null;

        // Set custom parameters that are specific to this sitelink,
        // and can be used by the sitelink, ad group, campaign, or account level tracking template.
        // In this example we are using the campaign level tracking template.
        $extension->SiteLinks[$i]->UrlCustomParameters = new CustomParameters();
        $extension->SiteLinks[$i]->UrlCustomParameters->Parameters = array();
        $customParameter1 = new CustomParameter();
        $customParameter1->Key = "promoCode";
        $customParameter1->Value = "PROMO" . ($i+1);
        $extension->SiteLinks[$i]->UrlCustomParameters->Parameters[] = $customParameter1;
        $customParameter2 = new CustomParameter();
        $customParameter2->Key = "season";
        $customParameter2->Value = "summer";
        $extension->SiteLinks[$i]->UrlCustomParameters->Parameters[] = $customParameter2;
    }

    $encodedExtension = new SoapVar($extension, SOAP_ENC_OBJECT, 'SiteLinksAdExtension', $proxy->GetNamespace());
    $adExtensions[] = $encodedExtension;

    // Add all extensions to the account's ad extension library

    $adExtensionIdentities = AddAdExtensions(
    	$proxy,
    	$AccountId,
    	$adExtensions
    	);

    // DeleteAdExtensionsAssociations, SetAdExtensionsAssociations, and GetAdExtensionsEditorialReasons
    // operations each require a list of type AdExtensionIdToEntityIdAssociation.

    $adExtensionIdToEntityIdAssociations = array ();

    // GetAdExtensionsByIds requires a list of type long.

    $adExtensionIds = array ();

    // Loop through the list of extension IDs and build any required data structures
    // for subsequent operations.

    $associations = array();

    for ($i = 0; $i < count($adExtensionIdentities->AdExtensionIdentity); $i++)
    {
    	$adExtensionIdToEntityIdAssociations[$i] = new AdExtensionIdToEntityIdAssociation();
    	$adExtensionIdToEntityIdAssociations[$i]->AdExtensionId = $adExtensionIdentities->AdExtensionIdentity[$i]->Id;;
    	$adExtensionIdToEntityIdAssociations[$i]->EntityId = $campaignIds[0];

    	$adExtensionIds[$i] = $adExtensionIdentities->AdExtensionIdentity[$i]->Id;
    };

    // Associate the specified ad extensions with the respective campaigns or ad groups.

    SetAdExtensionsAssociations(
    	$proxy,
    	$AccountId,
    	$adExtensionIdToEntityIdAssociations,
    	AssociationType::Campaign
    	);

    // Get editorial rejection reasons for the respective ad extension and entity associations.

    $adExtensionEditorialReasonCollection = GetAdExtensionsEditorialReasons(
    	$proxy,
    	$AccountId,
    	$adExtensionIdToEntityIdAssociations,
    	AssociationType::Campaign
    	);

    $adExtensionsTypeFilter = array(
        AdExtensionsTypeFilter::AppAdExtension,
    	AdExtensionsTypeFilter::CallAdExtension,
    	AdExtensionsTypeFilter::LocationAdExtension,
    	AdExtensionsTypeFilter::SiteLinksAdExtension
    );

    // Get the specified ad extensions from the account�s ad extension library.

    $adExtensions = GetAdExtensionsByIds(
    	$proxy,
    	$AccountId,
    	$adExtensionIds,
    	$adExtensionsTypeFilter
    	);

    $index = 0;

    foreach ($adExtensions->AdExtension as $extension)
    {
    	if (null == $extension)
    	{
    		print "Extension is null or invalid.";
    	}
    	else
    	{
    		print("Ad extension ID: " . $extension->Id . "\n");
    		print("Ad extension Type: " . $extension->Type . "\n");

                if ($extension->Type === "AppAdExtension")
    		{
    			print("AppPlatform: " . $extension->AppPlatform . "\n");
    			print("AppStoreId: " . $extension->AppStoreId . "\n");
    			print("DisplayText: " . $extension->DisplayText . "\n");
    			print("DestinationUrl: " . $extension->DestinationUrl . "\n");
    			print("\n");
    		}
                else if ($extension->Type === "CallAdExtension")
    		{
    			print("Phone number: " . $extension->PhoneNumber . "\n");
    			print("Country: " . $extension->CountryCode . "\n");
    			printf("Is only clickable item: %s\n",
    			(true == $extension->IsCallOnly) ? "true" : "false");
    			print("\n");
    		}
    		else if ($extension->Type === "LocationAdExtension")
    		{
    			// Ads will not include the location extension until the business' coordinates
    			// (longitude and latitude) are determined using the business' address. The GeoCodeStatus
    			// field indicates the progress. It can take from seconds to minutes to determine
    			// the coordinates.

    			print("Company name: " . $extension->CompanyName . "\n");
    			print("Phone number: " . $extension->PhoneNumber . "\n");
    			print("Street: " . $extension->Address->StreetAddress . "\n");
    			print("City: " . $extension->Address->CityName . "\n");
    			print("State: " . $extension->Address->ProvinceName . "\n");
    			print("Country: " . $extension->Address->CountryCode . "\n");
    			print("Zip code: " . $extension->Address->PostalCode . "\n");
    			print("Business coordinates determined?: " . $extension->GeoCodeStatus . "\n");
    			print("Map icon ID: " . $extension->IconMediaId . "\n");
    			print("Business image ID: " . $extension->ImageMediaId . "\n");
    			print("\n");
    		}
    		else if ($extension->Type === "SiteLinksAdExtension")
    		{
    			foreach ($extension->SiteLinks->SiteLink as $siteLink)
    			{
    				print("DisplayText: " . $siteLink->DisplayText . "\n");
    				print("DestinationUrl: " . $siteLink->DestinationUrl . "\n");
                                print("FinalMobileUrls: \n");
                                foreach ($siteLink->FinalMobileUrls->string as $finalMobileUrl)
    			        {
                                	print("\t" . $finalMobileUrl . "\n");
                                }
                                print("FinalUrls: \n");
                                foreach ($siteLink->FinalUrls->string as $finalUrl)
    			        {
                                	print("\t" . $finalUrl . "\n");
                                }
                                print("TrackingUrlTemplate: " . $siteLink->TrackingUrlTemplate . "\n");
                                print("UrlCustomParameters: \n");
                                if ($siteLink->UrlCustomParameters != null && $siteLink->UrlCustomParameters->Parameters != null)
                                {
                                	foreach ($siteLink->UrlCustomParameters->Parameters->CustomParameter as $customParameter)
    			        	{
                                		print("\tKey: " . $customParameter->Key . "\n");
                                        	print("\tValue: " . $customParameter->Value . "\n");
                                	}
                                }
    				print("\n");
    			}
    		}
    		else
    		{
    			print("  Unknown extension type\n");
    		}

    		if(!empty($adExtensionEditorialReasonCollection)
    			&& (count($adExtensionEditorialReasonCollection) > 0)
    			&& !empty($adExtensionEditorialReasonCollection->AdExtensionEditorialReason[$index]))
    		{
    			print "";

    			// Print any editorial rejection reasons for the corresponding extension. This sample
    			// assumes the same list index for adExtensions and adExtensionEditorialReasonCollection
    			// as defined above.

    			foreach ($adExtensionEditorialReasonCollection->AdExtensionEditorialReason[$index]->Reasons as $adExtensionEditorialReason)
    			{
    				print("Editorial Rejection Location: " . $adExtensionEditorialReason->Location . "\n");
    				print("Editorial Rejection PublisherCountries: \n");
    				foreach($adExtensionEditorialReason->PublisherCountries->string as $publisherCountry)
    				{
    					print("  " . $publisherCountry);
    				}
    				print("Editorial Rejection ReasonCode: " . $adExtensionEditorialReason->ReasonCode . "\n");
    				print("Editorial Rejection Term: " . $adExtensionEditorialReason->Term . "\n");
    				print("\n");
    			}
    		}
    	}

    	print("\n");

    	$index++;
    }

    // Remove the specified associations from the respective campaigns or ad groups.
    // The extesions are still available in the account's extensions library.
    DeleteAdExtensionsAssociations(
    	$proxy,
    	$AccountId,
    	$adExtensionIdToEntityIdAssociations,
    	AssociationType::Campaign
    	);

    // Deletes the ad extensions from the account�s ad extension library.
    DeleteAdExtensions(
    	$proxy,
    	$AccountId,
    	$adExtensionIds
    	);

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

// Adds one or more ad extensions to the account's ad extension library.

function AddAdExtensions($proxy, $accountId, $adExtensions)
{
    // Set the request information.

    $request = new AddAdExtensionsRequest();
    $request->AccountId = $accountId;
    $request->AdExtensions = $adExtensions;

    return $proxy->GetService()->AddAdExtensions($request)->AdExtensionIdentities;
}

// Deletes one or more ad extensions from the account's ad extension library.

function DeleteAdExtensions($proxy, $accountId, $adExtensionIds)
{
	// Set the request information.

	$request = new DeleteAdExtensionsRequest();
	$request->AccountId = $accountId;
	$request->AdExtensionIds = $adExtensionIds;

	$proxy->GetService()->DeleteAdExtensions($request);
}

// Associates one or more extensions with the corresponding campaign or ad group entities.

function SetAdExtensionsAssociations($proxy, $accountId, $associations, $associationType)
{
	// Set the request information.
	$request = new SetAdExtensionsAssociationsRequest();
	$request->AccountId = $accountId;
	$request->AdExtensionIdToEntityIdAssociations = $associations;
	$request->AssociationType = $associationType;

	$proxy->GetService()->SetAdExtensionsAssociations($request);
}

// Removes the specified association from the respective campaigns or ad groups.

function DeleteAdExtensionsAssociations($proxy, $accountId, $associations, $associationType)
{
	// Set the request information.
	$request = new DeleteAdExtensionsAssociationsRequest();
	$request->AccountId = $accountId;
	$request->AdExtensionIdToEntityIdAssociations = $associations;
	$request->AssociationType = $associationType;

	$proxy->GetService()->DeleteAdExtensionsAssociations($request);
}

// Gets the specified ad extensions from the account's extension library.

function GetAdExtensionsByIds($proxy, $accountId, $adExtensionIds, $adExtensionsTypeFilter)
{
    // Set the request information.

    $request = new GetAdExtensionsByIdsRequest();
    $request->AccountId = $accountId;
    $request->AdExtensionIds = $adExtensionIds;
    $request->AdExtensionType = $adExtensionsTypeFilter;

    return $proxy->GetService()->GetAdExtensionsByIds($request)->AdExtensions;
}

// Gets the reasons why the specified extension failed editorial when
// in the context of an associated campaign or ad group.

function GetAdExtensionsEditorialReasons($proxy, $accountId, $associations, $associationType)
{
    // Set the request information.

	$request = new GetAdExtensionsEditorialReasonsRequest();
    $request->AccountId = $accountId;
    $request->AdExtensionIdToEntityIdAssociations = $associations;
    $request->AssociationType = $associationType;

    return $proxy->GetService()->GetAdExtensionsEditorialReasons($request)->EditorialReasons;
}

?>
