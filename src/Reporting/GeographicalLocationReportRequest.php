<?php

namespace BingAds\Reporting;

/**
 * The GeographicalLocationReportRequest and corresponding programming elements are deprecated, and instead you should use the GeoLocationPerformanceReportRequest.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn393955(v=msads.90).aspx GeographicalLocationReportRequest Data Object
 * 
 * @uses NonHourlyReportAggregation
 * @uses GeographicalLocationReportColumn
 * @uses GeographicalLocationReportFilter
 * @uses AccountThroughAdGroupReportScope
 * @uses ReportTime
 */
final class GeographicalLocationReportRequest extends ReportRequest
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
     * @var GeographicalLocationReportColumn[]
     */
    public $Columns;
    /**
     * The filter information to use to filter the report data.
     *
     * @var GeographicalLocationReportFilter
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
