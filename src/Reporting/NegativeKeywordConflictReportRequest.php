<?php

namespace BingAds\Reporting;

/**
 * Defines a negative keyword conflict report request.
 *
 * @link http://msdn.microsoft.com/en-us/library/hh560534(v=msads.90).aspx NegativeKeywordConflictReportRequest Data Object
 * 
 * @uses NegativeKeywordConflictReportColumn
 * @uses AccountThroughAdGroupReportScope
 */
final class NegativeKeywordConflictReportRequest extends ReportRequest
{
    /**
     * The list of attributes and performance statistics to include in the report.
     *
     * @var NegativeKeywordConflictReportColumn[]
     */
    public $Columns;
    /**
     * The scope of the report.
     *
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;
}
