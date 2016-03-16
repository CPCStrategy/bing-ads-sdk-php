<?php

namespace BingAds\Reporting;

/**
 * Defines an ad dynamic text performance report request.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671950(v=msads.90).aspx AdDynamicTextPerformanceReportRequest Data Object
 * 
 * @uses NonHourlyReportAggregation
 * @uses AdDynamicTextPerformanceReportColumn
 * @uses AdDynamicTextPerformanceReportFilter
 * @uses AccountThroughAdGroupReportScope
 * @uses ReportTime
 */
final class AdDynamicTextPerformanceReportRequest extends ReportRequest
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
     * @var AdDynamicTextPerformanceReportColumn[]
     */
    public $Columns;
    /**
     * The filter information to use to filter the report data.
     *
     * @var AdDynamicTextPerformanceReportFilter
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
