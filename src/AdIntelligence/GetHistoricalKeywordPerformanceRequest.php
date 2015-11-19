<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the historical performance of the normalized search term.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn336996(v=msads.90).aspx GetHistoricalKeywordPerformance Request Object
 *
 * @uses TimeInterval
 * @uses AdPosition
 * @uses MatchType
 * @used-by BingAdsAdIntelligenceService::GetHistoricalKeywordPerformance
 */
final class GetHistoricalKeywordPerformanceRequest
{
    /**
     * An array of keywords for which you want to get historical performance statistics.
     *
     * @var string[]
     */
    public $Keywords;
    /**
     * The time period that identifies the data to use to determine the key performance index of the specified keywords.
     *
     * @var TimeInterval
     */
    public $TimeInterval;
    /**
     * The position of the search results for which you want to get performance data.
     *
     * @var AdPosition
     */
    public $TargetAdPosition;
    /**
     * The match types for which you want to get historical data.
     *
     * @var MatchType[]
     */
    public $MatchTypes;
    /**
     * The language in which the keywords are written.
     *
     * @var string
     */
    public $Language;
    /**
     * The country codes of the countries/regions to use as the source of the historical data.
     *
     * @var string[]
     */
    public $PublisherCountries;
    /**
     * A list of one or more of the following device types.
     *
     * @var string[]
     */
    public $Devices;
}
