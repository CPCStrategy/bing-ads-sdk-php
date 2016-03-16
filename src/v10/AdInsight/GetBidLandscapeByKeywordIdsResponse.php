<?php

namespace BingAds\v10\AdInsight;

/**
 * Given a list of existing keywords, this operation returns for each a list of suggested bids and estimated performance statistics.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219285(v=msads.100).aspx GetBidLandscapeByKeywordIds Response Object
 * 
 * @uses KeywordBidLandscape
 * @used-by BingAdsAdInsightService::GetBidLandscapeByKeywordIds
 */
final class GetBidLandscapeByKeywordIdsResponse
{
    public $BidLandscape;
}
