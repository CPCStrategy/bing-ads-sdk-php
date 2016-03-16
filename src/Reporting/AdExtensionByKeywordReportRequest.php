<?php

namespace BingAds\Reporting;

/**
 * Defines an ad extension by keyword report request.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj713605(v=msads.90).aspx AdExtensionByKeywordReportRequest Data Object
 * 
 * @uses ReportAggregation
 * @uses AdExtensionByKeywordReportColumn
 * @uses AdExtensionByKeywordReportFilter
 * @uses AccountThroughAdGroupReportScope
 * @uses ReportTime
 */
final class AdExtensionByKeywordReportRequest extends ReportRequest
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
     * @var AdExtensionByKeywordReportColumn[]
     */
    public $Columns;
    /**
     * The criteria to use to filter the report data.
     *
     * @var AdExtensionByKeywordReportFilter
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
