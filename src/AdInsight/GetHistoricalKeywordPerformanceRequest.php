<?php

namespace BingAds\AdInsight;

/**
 * Gets the historical performance of the normalized search term.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219302(v=msads.100).aspx GetHistoricalKeywordPerformance Request Object
 * 
 * @uses TimeInterval
 * @uses AdPosition
 * @uses MatchType
 * @used-by BingAdsAdInsightService::GetHistoricalKeywordPerformance
 */
final class GetHistoricalKeywordPerformanceRequest
{
    public $Keywords;
    public $TimeInterval;
    public $TargetAdPosition;
    public $MatchTypes;
    public $Language;
    public $PublisherCountries;
    public $Devices;
}
