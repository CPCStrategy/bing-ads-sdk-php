<?php

namespace BingAds\v10\AdInsight;

/**
 * Given a list of existing ad groups, this operation returns for each a list of suggested bids and estimated performance statistics.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219284(v=msads.100).aspx GetBidLandscapeByAdGroupIds Response Object
 * 
 * @uses AdGroupBidLandscape
 * @used-by BingAdsAdInsightService::GetBidLandscapeByAdGroupIds
 */
final class GetBidLandscapeByAdGroupIdsResponse
{
    public $BidLandscape;
}
