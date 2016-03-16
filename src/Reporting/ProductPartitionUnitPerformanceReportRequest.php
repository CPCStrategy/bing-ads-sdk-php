<?php

namespace BingAds\Reporting;

/**
 * Defines a product partition unit performance report request that aggregates the performance data by product partition unit for a specified time period.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt592960(v=msads.90).aspx ProductPartitionUnitPerformanceReportRequest Data Object
 * 
 * @uses ReportAggregation
 * @uses ProductPartitionUnitPerformanceReportColumn
 * @uses ProductPartitionUnitPerformanceReportFilter
 * @uses AccountThroughAdGroupReportScope
 * @uses ReportTime
 */
final class ProductPartitionUnitPerformanceReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use to aggregate the report data.
     *
     * @var ReportAggregation
     */
    public $Aggregation;
    /**
     * The list of attributes and performance statistics to include in the report.
     *
     * @var ProductPartitionUnitPerformanceReportColumn[]
     */
    public $Columns;
    /**
     * The filter information to use to filter the report data.
     *
     * @var ProductPartitionUnitPerformanceReportFilter
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
