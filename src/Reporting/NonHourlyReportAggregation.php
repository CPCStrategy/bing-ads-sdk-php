<?php

namespace BingAds\Reporting;

/**
 * Defines the aggregation values for reports that cannot specify hourly aggregation.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb672057(v=msads.90).aspx NonHourlyReportAggregation Value Set
 *
 * @used-by AdDynamicTextPerformanceReportRequest
 * @used-by AdPerformanceReportRequest
 * @used-by AgeGenderDemographicReportRequest
 * @used-by ConversionPerformanceReportRequest
 * @used-by DestinationUrlPerformanceReportRequest
 * @used-by GeographicalLocationReportRequest
 * @used-by GeoLocationPerformanceReportRequest
 * @used-by GoalsAndFunnelsReportRequest
 * @used-by PublisherUsagePerformanceReportRequest
 * @used-by RichAdComponentPerformanceReportRequest
 * @used-by ShareOfVoiceReportRequest
 * @used-by TacticChannelReportRequest
 * @used-by TrafficSourcesReportRequest
 */
final class NonHourlyReportAggregation
{
    /** The report data will be aggregated for the entire specified report time. */
    const SUMMARY = 'Summary';
    /** The report data will be aggregated for each day. */
    const DAILY = 'Daily';
    /** The report data is aggregated for each week. */
    const WEEKLY = 'Weekly';
    /** The report data will be aggregated for each month. */
    const MONTHLY = 'Monthly';
    /** The report data is aggregated for each year. */
    const YEARLY = 'Yearly';
}
