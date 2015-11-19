<?php

namespace BingAds\AdInsight;

/**
 * Gets the historical performance of the normalized search term.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219302(v=msads.100).aspx GetHistoricalKeywordPerformance Response Object
 * 
 * @uses KeywordHistoricalPerformance
 * @used-by BingAdsAdInsightService::GetHistoricalKeywordPerformance
 */
final class GetHistoricalKeywordPerformanceResponse
{
    public $KeywordHistoricalPerformances;
}
