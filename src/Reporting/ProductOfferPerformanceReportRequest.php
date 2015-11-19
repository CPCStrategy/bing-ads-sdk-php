<?php

namespace BingAds\Reporting;

/**
 * Defines a product offer performance report request that aggregates the performance data by product offer for a specified time period.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743719(v=msads.90).aspx ProductOfferPerformanceReportRequest Data Object
 * 
 * @uses ReportAggregation
 * @uses ProductOfferPerformanceReportColumn
 * @uses ProductOfferPerformanceReportFilter
 * @uses AccountThroughAdGroupReportScope
 * @uses ReportTime
 */
final class ProductOfferPerformanceReportRequest extends ReportRequest
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
     * @var ProductOfferPerformanceReportColumn[]
     */
    public $Columns;
    /**
     * The filter information to use to filter the report data.
     *
     * @var ProductOfferPerformanceReportFilter
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
