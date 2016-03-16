<?php

namespace BingAds\Reporting;

/**
 * Defines a keyword performance report column and corresponding sort order.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn342799(v=msads.90).aspx KeywordPerformanceReportSort Data Object
 * 
 * @uses KeywordPerformanceReportColumn
 * @uses SortOrder
 * @used-by KeywordPerformanceReportRequest
 */
final class KeywordPerformanceReportSort
{
    /**
     * The keyword performance report column by which to sort.
     *
     * @var KeywordPerformanceReportColumn
     */
    public $SortColumn;
    /**
     * Defines the ascending or descending sort order of values within the specified report column.
     *
     * @var SortOrder
     */
    public $SortOrder;
}
