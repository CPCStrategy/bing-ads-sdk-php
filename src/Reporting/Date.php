<?php

namespace BingAds\Reporting;

/**
 * Defines a calendar date by month, day, and year.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn376514(v=msads.90).aspx Date Data Object
 *
 * @used-by BudgetSummaryReportTime
 * @used-by ReportTime
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
