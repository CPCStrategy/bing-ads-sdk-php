<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the ad extension by ad report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn393942(v=msads.90).aspx AdExtensionByAdReportFilter Data Object
 *
 * @uses DeviceOSReportFilter
 * @uses DeviceTypeReportFilter
 * @used-by AdExtensionByAdReportRequest
 */
final class AdExtensionByAdReportFilter
{
    /**
     * The report will include data where the ad is displayed on the specified device operating systems.
     *
     * @var DeviceOSReportFilter
     */
    public $DeviceOS;
    /**
     * The report will include data where the ad is displayed on the specified device types.
     *
     * @var DeviceTypeReportFilter
     */
    public $DeviceType;
}
