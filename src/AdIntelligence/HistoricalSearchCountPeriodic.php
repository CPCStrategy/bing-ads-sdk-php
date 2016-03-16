<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains the number of times that the keyword was used in a search query during the specified time period.
 *
 * @link http://msdn.microsoft.com/en-us/library/hh921728(v=msads.90).aspx HistoricalSearchCountPeriodic Data Object
 * 
 * @uses DayMonthAndYear
 * @used-by KeywordSearchCount
 */
final class HistoricalSearchCountPeriodic
{
    /**
     * The number of times that the keyword was used in a search query on the specified device type during the time period.
     *
     * @var int
     */
    public $SearchCount;
    /**
     * The time period in which the count was captured.
     *
     * @var DayMonthAndYear
     */
    public $DayMonthAndYear;
}
