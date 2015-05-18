<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the estimated position in the search results if the specified bid value had been used for the keywords in the last 7 days.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn336989(v=msads.90).aspx GetEstimatedPositionByKeywordIds Response Object
 *
 * @uses KeywordIdEstimatedPosition
 * @used-by BingAdsAdIntelligenceService::GetEstimatedPositionByKeywordIds
 */
final class GetEstimatedPositionByKeywordIdsResponse
{
    /**
     * A list of KeywordIdEstimatedPosition objects.
     *
     * @var KeywordIdEstimatedPosition[]
     */
    public $KeywordEstimatedPositions;
}
