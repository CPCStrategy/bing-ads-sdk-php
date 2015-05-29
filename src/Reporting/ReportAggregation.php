<?php

namespace BingAds\Reporting;

/**
 * Defines the aggregation values that you can use for a report.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb672067(v=msads.90).aspx ReportAggregation Value Set
 *
 * @used-by AccountPerformanceReportRequest
 * @used-by AdExtensionByAdReportRequest
 * @used-by AdExtensionByKeywordReportRequest
 * @used-by AdExtensionDetailReportRequest
 * @used-by AdGroupPerformanceReportRequest
 * @used-by BrandZonePerformanceReportRequest
 * @used-by CallDetailReportRequest
 * @used-by CampaignPerformanceReportRequest
 * @used-by KeywordPerformanceReportRequest
 * @used-by ProductDimensionPerformanceReportRequest
 * @used-by ProductOfferPerformanceReportRequest
 * @used-by ProductPartitionPerformanceReportRequest
 * @used-by ProductTargetPerformanceReportRequest
 * @used-by SitePerformanceReportRequest
 */
final class ReportAggregation
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
