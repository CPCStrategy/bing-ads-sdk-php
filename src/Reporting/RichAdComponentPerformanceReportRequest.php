<?php

namespace BingAds\Reporting;

/**
 * Defines a rich ad performance report request.
 *
 * @link http://msdn.microsoft.com/en-us/library/hh180150(v=msads.90).aspx RichAdComponentPerformanceReportRequest Data Object
 * 
 * @uses NonHourlyReportAggregation
 * @uses RichAdComponentPerformanceReportColumn
 * @uses RichAdComponentPerformanceReportFilter
 * @uses AccountThroughAdGroupReportScope
 * @uses ReportTime
 */
final class RichAdComponentPerformanceReportRequest extends ReportRequest
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
     * @var RichAdComponentPerformanceReportColumn[]
     */
    public $Columns;
    /**
     * The filter information to use to filter the report data.
     *
     * @var RichAdComponentPerformanceReportFilter
     */
    public $Filter;
    /**
     * The scope of the report.
     *
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;
    /**
     * The time period to use for the report.
     *
     * @var ReportTime
     */
    public $Time;
}
