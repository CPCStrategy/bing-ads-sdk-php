<?php

namespace BingAds\Reporting;

/**
 * Defines a traffic sources report request.
 *
 * @link http://msdn.microsoft.com/en-us/library/gg262853(v=msads.90).aspx TrafficSourcesReportRequest Data Object
 *
 * @uses NonHourlyReportAggregation
 * @uses TrafficSourcesReportColumn
 * @uses TrafficSourcesReportFilter
 * @uses AccountReportScope
 * @uses ReportTime
 */
final class TrafficSourcesReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use to aggregate the report data.
     *
     * @var NonHourlyReportAggregation
     */
    public $Aggregation;
    /**
     * The list of attributes and performance statistics to include in the report.
     *
     * @var TrafficSourcesReportColumn[]
     */
    public $Columns;
    /**
     * The filter information to use to filter the report data.
     *
     * @var TrafficSourcesReportFilter
     */
    public $Filter;
    /**
     * The scope of the report.
     *
     * @var AccountReportScope
     */
    public $Scope;
    /**
     * The time period to use for the report.
     *
     * @var ReportTime
     */
    public $Time;
}
