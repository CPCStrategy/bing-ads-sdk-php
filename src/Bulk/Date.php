<?php

namespace BingAds\Bulk;

/**
 * Defines a calendar date by month, day, and year.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj134989(v=msads.100).aspx Date Data Object
 * 
 * @used-by PerformanceStatsDateRange
 */
final class Date
{
    /**
     * Specifies the day of the month.
     *
     * @var int
     */
    public $Day;
    /**
     * Specifies the month.
     *
     * @var int
     */
    public $Month;
    /**
     * Specifies the year.
     *
     * @var int
     */
    public $Year;
}
