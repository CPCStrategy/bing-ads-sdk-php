<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the ad performance report request data.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671609(v=msads.90).aspx AdPerformanceReportFilter Data Object
 * 
 * @uses AdDistributionReportFilter
 * @uses AdTypeReportFilter
 * @uses DeviceTypeReportFilter
 * @used-by AdPerformanceReportRequest
 */
final class AdPerformanceReportFilter
{
    /**
     * The report will include data for only the specified distribution medium.
     *
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;
    /**
     * The report will include data for only the specified ad types.
     *
     * @var AdTypeReportFilter
     */
    public $AdType;
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
