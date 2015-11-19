<?php

namespace BingAds\AdInsight;

/**
 * Gets the estimated position in the search results if the specified bid value would be used for the specified keywords.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219298(v=msads.100).aspx GetEstimatedPositionByKeywords Request Object
 * 
 * @uses Currency
 * @uses MatchType
 * @used-by BingAdsAdInsightService::GetEstimatedPositionByKeywords
 */
final class GetEstimatedPositionByKeywordsRequest
{
    public $Keywords;
    public $MaxBid;
    public $Language;
    public $PublisherCountries;
    public $Currency;
    public $MatchTypes;
    public $CampaignId;
    public $AdGroupId;
}
