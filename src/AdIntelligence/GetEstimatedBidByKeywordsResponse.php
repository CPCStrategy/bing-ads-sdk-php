<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the estimated bid value of one or more keywords that could result in an ad appearing in the targeted position in the search results.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn336987(v=msads.90).aspx GetEstimatedBidByKeywords Response Object
 * 
 * @uses KeywordEstimatedBid
 * @uses AdGroupEstimatedBid
 * @used-by BingAdsAdIntelligenceService::GetEstimatedBidByKeywords
 */
final class GetEstimatedBidByKeywordsResponse
{
    /**
     * An array of KeywordEstimatedBid objects.
     *
     * @var KeywordEstimatedBid[]
     */
    public $KeywordEstimatedBids;
    /**
     * Contains estimates of clicks, average cost per click (CPC), impressions, click-through rate (CTR), and total cost for the specified ad group if you would use the suggested bid.
     *
     * @var AdGroupEstimatedBid
     */
    public $AdGroupEstimatedBid;
}
