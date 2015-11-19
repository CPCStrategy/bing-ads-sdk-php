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

// Specify the BingAds\AdIntelligence objects that will be used.
use BingAds\AdIntelligence\GetEstimatedBidByKeywordsRequest;
use BingAds\AdIntelligence\Currency;
use BingAds\AdIntelligence\KeywordAndMatchType;
use BingAds\AdIntelligence\MatchType;
use BingAds\AdIntelligence\TargetAdPosition;
use BingAds\AdIntelligence\KeywordEstimatedBid;
use BingAds\AdIntelligence\AdGroupEstimatedBid;

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

// Ad Intelligence WSDL

$wsdl = "https://api.bingads.microsoft.com/Api/Advertiser/AdIntelligence/v9/AdIntelligenceService.svc?singleWsdl";

try
{
    $proxy = ClientProxy::ConstructWithAccountId($wsdl, $UserName, $Password, $DeveloperToken, $AccountId, null);

    // Set the Currency, Keywords, Language, PublisherCountries, and TargetPositionForAds
    // for the estimated bid by keywords request.

    $currency = Currency::USDollar;

    $keywordAndMatchTypes = array ();

    $keywordAndMatchType = new KeywordAndMatchType();
    $keywordAndMatchType->KeywordText = "flower";
    $matchTypes = array (MatchType::Exact, MatchType::Phrase, MatchType::Broad);
    $keywordAndMatchType->MatchTypes = $matchTypes;
    $keywordAndMatchTypes[] = $keywordAndMatchType;

    $keywordAndMatchType = new KeywordAndMatchType();
    $keywordAndMatchType->KeywordText = "delivery";
    $matchTypes = array (MatchType::Exact, MatchType::Phrase, MatchType::Broad);
    $keywordAndMatchType->MatchTypes = $matchTypes;
    $keywordAndMatchTypes[] = $keywordAndMatchType;

    $language = 'English';

    $publisherCountries = array ( 'US' );

    $targetPositionForAds = TargetAdPosition::SideBar;

    // GetKeywordEstimatedBidByKeywords helper method calls the corresponding Bing Ads service operation
    // to request the KeywordEstimatedBids.
    $keywordEstimatedBids = GetKeywordEstimatedBidByKeywords(
    		$proxy,
    		$currency,
    		$keywordAndMatchTypes,
    		$language,
    		$publisherCountries,
    		$targetPositionForAds
    		);

    // GetAdGroupEstimatedBidByKeywords helper method calls the corresponding Bing Ads service operation
    // to request the AdGroupEstimatedBid.
    $adGroupEstimatedBid = GetAdGroupEstimatedBidByKeywords(
    		$proxy,
    		$currency,
    		$keywordAndMatchTypes,
    		$language,
    		$publisherCountries,
    		$targetPositionForAds
            );

    // Print the KeywordEstimatedBids

    foreach ($keywordEstimatedBids->KeywordEstimatedBid as $bid)
    {
        print $bid->Keyword . "\n";

        if (empty($bid->EstimatedBids->EstimatedBidAndTraffic))
        {
            print "  There is no bid information available for the keyword.\n\n";
        }
        else
        {
            foreach ($bid->EstimatedBids->EstimatedBidAndTraffic as $kpi)
            {
                printf("  %s\n", $kpi->MatchType);
                printf("    Estimated Minimum Bid: %.2f\n", $kpi->EstimatedMinBid);
                printf("    Average CPC: %.2f\n", $kpi->AverageCPC);
                printf("    CTR: %.2f\n", $kpi->CTR);
                printf("    Estimated clicks per week: %s to %s\n",
                    number_format($kpi->MinClicksPerWeek, 0),
                    number_format($kpi->MaxClicksPerWeek, 0));
                printf("    Estimated impressions per week: %s to %s\n",
                    number_format($kpi->MinImpressionsPerWeek, 0),
                    number_format($kpi->MaxImpressionsPerWeek, 0));
                printf("    Estimated cost per week: %.2f to %.2f\n",
                    $kpi->MinTotalCostPerWeek,
                    $kpi->MaxTotalCostPerWeek);

                print "\n";
            }
        }
    }

    // Print the AdGroupEstimatedBid

    print "AdGroupEstimatedBid\n";

    printf("  Average CPC: %.2f\n", $adGroupEstimatedBid->AverageCPC);
    printf("  CTR: %.2f\n", $adGroupEstimatedBid->CTR);
    printf("  Estimated Ad Group Bid: %.2f\n", $adGroupEstimatedBid->EstimatedAdGroupBid);
    printf("  Estimated clicks per week: %s to %s\n",
        number_format($adGroupEstimatedBid->MinClicksPerWeek, 0),
        number_format($adGroupEstimatedBid->MaxClicksPerWeek, 0));
    printf("  Estimated impressions per week: %s to %s\n",
        number_format($adGroupEstimatedBid->MinImpressionsPerWeek, 0),
        number_format($adGroupEstimatedBid->MaxImpressionsPerWeek, 0));
    printf("  Estimated cost per week: %.2f to %.2f\n",
        $adGroupEstimatedBid->MinTotalCostPerWeek,
        $adGroupEstimatedBid->MaxTotalCostPerWeek);

}
catch (SoapFault $e)
{
	// Output the last request/response.

	print "\nLast SOAP request/response:\n";
	print $proxy->GetWsdl() . "\n";
	print $proxy->GetService()->__getLastRequest()."\n";
	print $proxy->GetService()->__getLastResponse()."\n";

	// Ad Intelligence service operations can throw AdApiFaultDetail.
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

	// Ad Intelligence service operations can throw ApiFaultDetail.
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
					case 0:     // InternalError
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
					case 0:     // InternalError
						break;
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


// Get one or more keyword estimated bids corresponding to placement of your ad in the targeted position.

function GetKeywordEstimatedBidByKeywords($proxy, $currency, $keywordAndMatchTypes,
		$language, $publisherCountries, $targetPositionForAds)
{
  // Set the request information.

  $request = new GetEstimatedBidByKeywordsRequest();
  $request->Currency = $currency;
  $request->GetBidsAtLevel = 0; // Set GetBidsAtLevel to 0 to get a list of KeywordEstimatedBid.
  $request->Keywords = $keywordAndMatchTypes;
  $request->Language = $language;
  $request->PublisherCountries = $publisherCountries;
  $request->TargetPositionForAds = $targetPositionForAds;

  return $proxy->GetService()->GetEstimatedBidByKeywords($request)->KeywordEstimatedBids;
}

// Get one or more ad group estimated bids corresponding to placement of your ad in the targeted position.

function GetAdGroupEstimatedBidByKeywords($proxy, $currency, $keywordAndMatchTypes,
		$language, $publisherCountries, $targetPositionForAds)
{
	// Set the request information.

	$request = new GetEstimatedBidByKeywordsRequest();
	$request->Currency = $currency;
	$request->GetBidsAtLevel = 2; // Set GetBidsAtLevel to 2 to get one AdGroupEstimatedBid.
	$request->Keywords = $keywordAndMatchTypes;
	$request->Language = $language;
	$request->PublisherCountries = $publisherCountries;
	$request->TargetPositionForAds = $targetPositionForAds;

	return $proxy->GetService()->GetEstimatedBidByKeywords($request)->AdGroupEstimatedBid;
}

?>
