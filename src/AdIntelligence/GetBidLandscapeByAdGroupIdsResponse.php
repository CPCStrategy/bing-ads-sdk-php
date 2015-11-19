<?php

namespace BingAds\AdIntelligence;

/**
 * Given a list of existing ad groups, this operation returns for each a list of suggested bids and estimated performance statistics.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743755(v=msads.90).aspx GetBidLandscapeByAdGroupIds Response Object
 *
 * @uses AdGroupBidLandscape
 * @used-by BingAdsAdIntelligenceService::GetBidLandscapeByAdGroupIds
 */
final class GetBidLandscapeByAdGroupIdsResponse
{
    /**
     * An array of AdGroupBidLandscape objects.
     *
     * @var AdGroupBidLandscape[]
     */
    public $BidLandscape;
}
