<?php

namespace BingAds\AdIntelligence;

/**
 * Given a list of existing keywords, this operation returns for each a list of suggested bids and estimated performance statistics.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn631945(v=msads.90).aspx GetBidLandscapeByKeywordIds Response Object
 * 
 * @uses KeywordBidLandscape
 * @used-by BingAdsAdIntelligenceService::GetBidLandscapeByKeywordIds
 */
final class GetBidLandscapeByKeywordIdsResponse
{
    /**
     * An array of KeywordBidLandscape objects.
     *
     * @var KeywordBidLandscape[]
     */
    public $BidLandscape;
}
