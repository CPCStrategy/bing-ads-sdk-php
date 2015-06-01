<?php

namespace BingAds\Reporting;

/**
 * This report request is deprecated and is not supported.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj713607(v=msads.90).aspx AdExtensionDimensionReportRequest Data Object
 *
 * @uses AdExtensionDimensionReportColumn
 * @uses AdExtensionDimensionReportFilter
 * @uses AccountReportScope
 */
final class AdExtensionDimensionReportRequest extends ReportRequest
{
    /**
     * The list of attributes and performance statistics to include in the report.
     *
     * @var AdExtensionDimensionReportColumn[]
     */
    public $Columns;
    /**
     * The criteria to use to filter the report data.
     *
     * @var AdExtensionDimensionReportFilter
     */
    public $Filter;
    /**
     * The scope of the report.
     *
     * @var AccountReportScope
     */
    public $Scope;
}
