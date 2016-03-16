<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the historical performance of the normalized search term.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn336996(v=msads.90).aspx GetHistoricalKeywordPerformance Response Object
 * 
 * @uses KeywordHistoricalPerformance
 * @used-by BingAdsAdIntelligenceService::GetHistoricalKeywordPerformance
 */
final class GetHistoricalKeywordPerformanceResponse
{
    /**
     * An array of KeywordHistoricalPerformance objects.
     *
     * @var KeywordHistoricalPerformance[]
     */
    public $KeywordHistoricalPerformances;
}
