<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the number of times the normalized term was used in a search during the specified time period.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn336988(v=msads.90).aspx GetHistoricalSearchCount Request Object
 * 
 * @uses DayMonthAndYear
 * @used-by BingAdsAdIntelligenceService::GetHistoricalSearchCount
 */
final class GetHistoricalSearchCountRequest
{
    /**
     * An array of keywords for which you want to determine the number of times that the keyword was used in a search query.
     *
     * @var string[]
     */
    public $Keywords;
    /**
     * The language in which the keywords are written.
     *
     * @var string
     */
    public $Language;
    /**
     * The country codes of the countries/regions to use as the source of the count data.
     *
     * @var string[]
     */
    public $PublisherCountries;
    /**
     * The start date of the date range that identifies the data that you want to use to determine the historical search count.
     *
     * @var DayMonthAndYear
     */
    public $StartDate;
    /**
     * The end date of the date range that identifies the data that you want to use to determine the historical search count.
     *
     * @var DayMonthAndYear
     */
    public $EndDate;
    /**
     * You may specify whether to return data aggregated daily, weekly, or monthly.
     *
     * @var string
     */
    public $TimePeriodRollup;
    /**
     * A list of one or more of the following device types.
     *
     * @var string[]
     */
    public $Devices;
}
