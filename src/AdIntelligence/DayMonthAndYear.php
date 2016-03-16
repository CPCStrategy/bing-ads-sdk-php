<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that you use to specify the start and end dates of a date range.
 *
 * @link http://msdn.microsoft.com/en-us/library/hh921738(v=msads.90).aspx DayMonthAndYear Data Object
 * 
 * @used-by AdGroupBidLandscape
 * @used-by HistoricalSearchCountPeriodic
 * @used-by KeywordBidLandscape
 * @used-by GetHistoricalSearchCountRequest
 */
final class DayMonthAndYear
{
    /**
     * The day of the month.
     *
     * @var int
     */
    public $Day;
    /**
     * The month specified as an integer value in the range of 1 through 12, where 1 is January and 12 is December.
     *
     * @var int
     */
    public $Month;
    /**
     * The year specified as a four-digit integer value.
     *
     * @var int
     */
    public $Year;
}
