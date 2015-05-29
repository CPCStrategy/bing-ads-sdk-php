<?php

namespace BingAds\Reporting;

/**
 * Defines the predefined time and date range values for a report request.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671772(v=msads.90).aspx ReportTimePeriod Value Set
 *
 * @used-by ReportTime
 */
final class ReportTimePeriod
{
    /** A cumulative report for the current day. */
    const TODAY = 'Today';
    /** A cumulative report for the previous day. */
    const YESTERDAY = 'Yesterday';
    /** A report for the previous seven days, one row for each day. */
    const LAST_SEVEN_DAYS = 'LastSevenDays';
    /** A cumulative report for the current calendar week. */
    const THIS_WEEK = 'ThisWeek';
    /** A cumulative report for the previous calendar week. */
    const LAST_WEEK = 'LastWeek';
    /** A cumulative report for the four calendar weeks prior to today. */
    const LAST_FOUR_WEEKS = 'LastFourWeeks';
    /** A cumulative report for the current calendar month. */
    const THIS_MONTH = 'ThisMonth';
    /** A cumulative report for the previous calendar month. */
    const LAST_MONTH = 'LastMonth';
    /** A cumulative report for the previous three calendar months. */
    const LAST_THREE_MONTHS = 'LastThreeMonths';
    /** A cumulative report for the previous six calendar months. */
    const LAST_SIX_MONTHS = 'LastSixMonths';
    /** A cumulative report for the current calendar year. */
    const THIS_YEAR = 'ThisYear';
    /** A cumulative report for the previous calendar year. */
    const LAST_YEAR = 'LastYear';
}
