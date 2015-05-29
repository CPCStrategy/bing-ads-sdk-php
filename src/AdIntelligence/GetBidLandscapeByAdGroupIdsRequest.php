<?php

namespace BingAds\AdIntelligence;

/**
 * Given a list of existing ad groups, this operation returns for each a list of suggested bids and estimated performance statistics.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743755(v=msads.90).aspx GetBidLandscapeByAdGroupIds Request Object
 *
 * @uses AdGroupBidLandscapeInput
 * @used-by BingAdsAdIntelligenceService::GetBidLandscapeByAdGroupIds
 */
final class GetBidLandscapeByAdGroupIdsRequest
{
    /**
     * An array of ad group identifiers with corresponding bid landscape type input.
     *
     * @var AdGroupBidLandscapeInput[]
     */
    public $AdGroupBidLandscapeInputs;
}
