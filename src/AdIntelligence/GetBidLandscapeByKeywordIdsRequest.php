<?php

namespace BingAds\AdIntelligence;

/**
 * Given a list of existing keywords, this operation returns for each a list of suggested bids and estimated performance statistics.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn631945(v=msads.90).aspx GetBidLandscapeByKeywordIds Request Object
 * 
 * @used-by BingAdsAdIntelligenceService::GetBidLandscapeByKeywordIds
 */
final class GetBidLandscapeByKeywordIdsRequest
{
    /**
     * An array of identifiers of the keywords for which you want to get the list of suggested bid values with estimated performance statistics.
     *
     * @var int[]
     */
    public $KeywordIds;
    /**
     * When set to false, the suggested bid values might not include the keyword's current bid.
     *
     * @var bool
     */
    public $IncludeCurrentBid;
}
