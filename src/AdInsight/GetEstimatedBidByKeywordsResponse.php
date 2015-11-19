<?php

namespace BingAds\AdInsight;

/**
 * Gets the estimated bid value of one or more keywords that could result in an ad appearing in the targeted position in the search results.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219297(v=msads.100).aspx GetEstimatedBidByKeywords Response Object
 * 
 * @uses KeywordEstimatedBid
 * @uses EstimatedBidAndTraffic
 * @used-by BingAdsAdInsightService::GetEstimatedBidByKeywords
 */
final class GetEstimatedBidByKeywordsResponse
{
    public $KeywordEstimatedBids;
    public $AdGroupEstimatedBid;
}
