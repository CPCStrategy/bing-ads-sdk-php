<?php

namespace BingAds\Reporting;

/**
 * Defines a keyword performance report request.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671816(v=msads.90).aspx KeywordPerformanceReportRequest Data Object
 *
 * @uses ReportAggregation
 * @uses KeywordPerformanceReportColumn
 * @uses KeywordPerformanceReportFilter
 * @uses AccountThroughAdGroupReportScope
 * @uses KeywordPerformanceReportSort
 * @uses ReportTime
 */
final class KeywordPerformanceReportRequest extends ReportRequest
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
     * @var KeywordPerformanceReportColumn[]
     */
    public $Columns;
    /**
     * The filter information to use to filter the report data.
     *
     * @var KeywordPerformanceReportFilter
     */
    public $Filter;
    /**
     * The top number of data rows to return in the report.
     *
     * @var int
     */
    public $MaxRows;
    /**
     * The scope of the report.
     *
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;
    /**
     * A list of the columns to sort, and the corresponding sort order.
     *
     * @var KeywordPerformanceReportSort[]
     */
    public $Sort;
    /**
     * The time period to use for the report.
     *
     * @var ReportTime
     */
    public $Time;
}
