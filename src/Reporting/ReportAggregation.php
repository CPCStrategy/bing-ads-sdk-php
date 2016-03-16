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
 * @used-by AudiencePerformanceReportRequest
 * @used-by BrandZonePerformanceReportRequest
 * @used-by CallDetailReportRequest
 * @used-by CampaignPerformanceReportRequest
 * @used-by KeywordPerformanceReportRequest
 * @used-by ProductDimensionPerformanceReportRequest
 * @used-by ProductOfferPerformanceReportRequest
 * @used-by ProductPartitionPerformanceReportRequest
 * @used-by ProductPartitionUnitPerformanceReportRequest
 * @used-by ProductTargetPerformanceReportRequest
 * @used-by SitePerformanceReportRequest
 */
final class ReportAggregation
{
    /** The report data will be aggregated for the entire specified report time. */
    const Summary = 'Summary';
    /** The report data will be aggregated for each hour. */
    const Hourly = 'Hourly';
    /** The report data will be aggregated for each day. */
    const Daily = 'Daily';
    /** The report data will be aggregated for each week. */
    const Weekly = 'Weekly';
    /** The report data will be aggregated for each month. */
    const Monthly = 'Monthly';
    /** The report data will be aggregated for each year. */
    const Yearly = 'Yearly';
    /** The report data will be aggregated by each of the 24 hours in a day. */
    const HourOfDay = 'HourOfDay';
    /** The report data will be aggregated by each of the seven days in a week. */
    const DayOfWeek = 'DayOfWeek';
}
