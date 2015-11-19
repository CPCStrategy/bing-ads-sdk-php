<?php

namespace BingAds\AdInsight;

/**
 * Given a list of existing ad groups, this operation returns for each a list of suggested bids and estimated performance statistics.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219284(v=msads.100).aspx GetBidLandscapeByAdGroupIds Request Object
 * 
 * @uses AdGroupBidLandscapeInput
 * @used-by BingAdsAdInsightService::GetBidLandscapeByAdGroupIds
 */
final class GetBidLandscapeByAdGroupIdsRequest
{
    public $AdGroupBidLandscapeInputs;
}
