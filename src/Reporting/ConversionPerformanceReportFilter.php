<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the conversion performance report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/gg262849(v=msads.90).aspx ConversionPerformanceReportFilter Data Object
 *
 * @uses DeviceTypeReportFilter
 * @used-by ConversionPerformanceReportRequest
 */
final class ConversionPerformanceReportFilter
{
    /**
     * The report will include data for only the specified types of devices on which the ad is displayed.
     *
     * @var DeviceTypeReportFilter
     */
    public $DeviceType;
    /**
     * The report will include data for only the specified keywords.
     *
     * @var string[]
     */
    public $Keywords;
}
