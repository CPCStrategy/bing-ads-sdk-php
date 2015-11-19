<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the destination URL performance report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671544(v=msads.90).aspx DestinationUrlPerformanceReportFilter Data Object
 * 
 * @uses AdDistributionReportFilter
 * @uses DeviceTypeReportFilter
 * @used-by DestinationUrlPerformanceReportRequest
 */
final class DestinationUrlPerformanceReportFilter
{
    /**
     * The report will include data for only the specified distribution medium.
     *
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;
    /**
     * The report will include data for only the specified types of devices on which the ad is displayed.
     *
     * @var DeviceTypeReportFilter
     */
    public $DeviceType;
    /**
     * The report will include data for only websites that used the specified languages.
     *
     * @var string[]
     */
    public $LanguageCode;
}
