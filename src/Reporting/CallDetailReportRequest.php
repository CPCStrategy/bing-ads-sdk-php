<?php

namespace BingAds\Reporting;

/**
 * Defines a call detail report request.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn195845(v=msads.90).aspx CallDetailReportRequest Data Object
 * 
 * @uses ReportAggregation
 * @uses CallDetailReportColumn
 * @uses AccountThroughAdGroupReportScope
 * @uses ReportTime
 */
final class CallDetailReportRequest extends ReportRequest
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
     * @var CallDetailReportColumn[]
     */
    public $Columns;
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
