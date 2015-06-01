<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the rich ad component keyword performance report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/hh180147(v=msads.90).aspx RichAdComponentPerformanceReportFilter Data Object
 *
 * @uses ComponentTypeFilter
 * @uses RichAdSubTypeFilter
 * @used-by RichAdComponentPerformanceReportRequest
 */
final class RichAdComponentPerformanceReportFilter
{
    /**
     * The report will include data for only the specified components.
     *
     * @var ComponentTypeFilter
     */
    public $ComponentType;
    /**
     * The report will include data for only the specified rich ad types.
     *
     * @var RichAdSubTypeFilter
     */
    public $RichAdSubType;
}
