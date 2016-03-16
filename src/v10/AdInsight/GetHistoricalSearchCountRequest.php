<?php

namespace BingAds\v10\AdInsight;

/**
 * Gets the number of times the normalized term was used in a search during the specified time period.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219308(v=msads.100).aspx GetHistoricalSearchCount Request Object
 * 
 * @uses DayMonthAndYear
 * @used-by BingAdsAdInsightService::GetHistoricalSearchCount
 */
final class GetHistoricalSearchCountRequest
{
    public $Keywords;
    public $Language;
    public $PublisherCountries;
    public $StartDate;
    public $EndDate;
    public $TimePeriodRollup;
    public $Devices;
}
