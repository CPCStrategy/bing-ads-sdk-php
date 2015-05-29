<?php

namespace BingAds\Bulk;

/**
 * Defines the date range values for the requested performance data in a bulk download.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn249977(v=msads.90).aspx ReportTimePeriod Value Set
 *
 * @used-by PerformanceStatsDateRange
 */
final class ReportTimePeriod
{
    /** Performance data for the current day. */
    const TODAY = 'Today';
    /** Performance data for the previous day. */
    const YESTERDAY = 'Yesterday';
    /** Performance data for the previous seven days, one row for each day. */
    const LAST_SEVEN_DAYS = 'LastSevenDays';
    /** Performance data for the current calendar week. */
    const THIS_WEEK = 'ThisWeek';
    /** Performance data for the previous calendar week. */
    const LAST_WEEK = 'LastWeek';
    /** Performance data for the four calendar weeks prior to today. */
    const LAST_FOUR_WEEKS = 'LastFourWeeks';
    /** Performance data for the current calendar month. */
    const THIS_MONTH = 'ThisMonth';
    /** Performance data for the previous calendar month. */
    const LAST_MONTH = 'LastMonth';
    /** Performance data for the previous three calendar months. */
    const LAST_THREE_MONTHS = 'LastThreeMonths';
    /** Performance data for the previous six calendar months. */
    const LAST_SIX_MONTHS = 'LastSixMonths';
    /** Performance data for the current calendar year. */
    const THIS_YEAR = 'ThisYear';
    /** Performance data for the previous calendar year. */
    const LAST_YEAR = 'LastYear';
}
