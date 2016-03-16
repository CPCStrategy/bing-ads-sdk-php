<?php

namespace BingAds\v10\AdInsight;

/**
 * Gets the estimated position in the search results if the specified bid value would be used for the specified keywords.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219298(v=msads.100).aspx GetEstimatedPositionByKeywords Response Object
 * 
 * @uses KeywordEstimatedPosition
 * @used-by BingAdsAdInsightService::GetEstimatedPositionByKeywords
 */
final class GetEstimatedPositionByKeywordsResponse
{
    public $KeywordEstimatedPositions;
}
