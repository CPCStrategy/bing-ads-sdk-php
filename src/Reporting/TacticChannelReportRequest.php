<?php

namespace BingAds\Reporting;

/**
 * Defines a tactic and channel report request.
 *
 * @link http://msdn.microsoft.com/en-us/library/gg262842(v=msads.90).aspx TacticChannelReportRequest Data Object
 *
 * @uses NonHourlyReportAggregation
 * @uses TacticChannelReportColumn
 * @uses TacticChannelReportFilter
 * @uses AccountThroughAdGroupReportScope
 * @uses ReportTime
 */
final class TacticChannelReportRequest extends ReportRequest
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
     * @var TacticChannelReportColumn[]
     */
    public $Columns;
    /**
     * The filter information to use to filter the report data.
     *
     * @var TacticChannelReportFilter
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
