<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the estimated position in the search results if the specified bid value would be used for the specified keywords.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn337006(v=msads.90).aspx GetEstimatedPositionByKeywords Response Object
 *
 * @uses KeywordEstimatedPosition
 * @used-by BingAdsAdIntelligenceService::GetEstimatedPositionByKeywords
 */
final class GetEstimatedPositionByKeywordsResponse
{
    /**
     * An array of KeywordEstimatedPosition objects.
     *
     * @var KeywordEstimatedPosition[]
     */
    public $KeywordEstimatedPositions;
}
