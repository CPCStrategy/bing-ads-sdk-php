<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the estimated position in the search results if the specified bid value had been used for the keywords in the last 7 days.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn336989(v=msads.90).aspx GetEstimatedPositionByKeywordIds Request Object
 * 
 * @used-by BingAdsAdIntelligenceService::GetEstimatedPositionByKeywordIds
 */
final class GetEstimatedPositionByKeywordIdsRequest
{
    /**
     * An array of identifiers of the keywords for which you want to get the estimated position in the search results, based on the specified bid value.
     *
     * @var int[]
     */
    public $KeywordIds;
    /**
     * The maximum bid value to use to determine the estimated position in the search results.
     *
     * @var float
     */
    public $MaxBid;
}
