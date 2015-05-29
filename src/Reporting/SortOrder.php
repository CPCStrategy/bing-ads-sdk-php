<?php

namespace BingAds\Reporting;

/**
 * Defines the ascending or descending sort order of values within the specified report column.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn342800(v=msads.90).aspx SortOrder Value Set
 *
 * @used-by KeywordPerformanceReportSort
 */
final class SortOrder
{
    const ASCENDING = 'Ascending';
    const DESCENDING = 'Descending';
}
