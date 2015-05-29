<?php

namespace BingAds\Reporting;

/**
 * Defines the aggregation values that you can use in a search query performance report.
 *
 * @link http://msdn.microsoft.com/en-us/library/ee703960(v=msads.90).aspx SearchQueryReportAggregation Value Set
 *
 * @used-by SearchQueryPerformanceReportRequest
 */
final class SearchQueryReportAggregation
{
    /** The report data will be aggregated for the entire specified report time. */
    const SUMMARY = 'Summary';
    /** The report data will be aggregated for each hour. */
    const HOURLY = 'Hourly';
    /** The report data will be aggregated for each day. */
    const DAILY = 'Daily';
    /** The report data will be aggregated for each week. */
    const WEEKLY = 'Weekly';
    /** The report data will be aggregated for each month. */
    const MONTHLY = 'Monthly';
    /** The report data will be aggregated for each year. */
    const YEARLY = 'Yearly';
    /** The report data will be aggregated by each of the 24 hours in a day. */
    const HOUR_OF_DAY = 'HourOfDay';
    /** The report data will be aggregated by each of the seven days in a week. */
    const DAY_OF_WEEK = 'DayOfWeek';
}
