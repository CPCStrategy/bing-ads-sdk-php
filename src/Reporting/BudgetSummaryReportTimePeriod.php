<?php

namespace BingAds\Reporting;

/**
 * Defines the predefined time and date range values for a budget summary report request.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671612(v=msads.90).aspx BudgetSummaryReportTimePeriod Value Set
 *
 * @used-by BudgetSummaryReportTime
 */
final class BudgetSummaryReportTimePeriod
{
    /** A cumulative report for the current day. */
    const TODAY = 'Today';
    /** A cumulative report for the previous day. */
    const YESTERDAY = 'Yesterday';
    /** A cumulative report for the previous seven days, having one row for each day. */
    const LAST_SEVEN_DAYS = 'LastSevenDays';
    /** A cumulative report for the current calendar month. */
    const THIS_MONTH = 'ThisMonth';
    /** A cumulative report for the previous calendar month. */
    const LAST_MONTH = 'LastMonth';
}
