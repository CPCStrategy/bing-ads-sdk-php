<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the estimated bid value of one or more keywords - specified by keyword identifier - that could have resulted in an ad appearing in the targeted position in the search results in the last 7 days.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn336995(v=msads.90).aspx GetEstimatedBidByKeywordIds Response Object
 * 
 * @uses KeywordIdEstimatedBid
 * @used-by BingAdsAdIntelligenceService::GetEstimatedBidByKeywordIds
 */
final class GetEstimatedBidByKeywordIdsResponse
{
    /**
     * An array of KeywordIdEstimatedBid objects.
     *
     * @var KeywordIdEstimatedBid[]
     */
    public $KeywordEstimatedBids;
}
