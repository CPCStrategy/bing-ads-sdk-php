<?php

namespace BingAds\Reporting;

/**
 * This report filter is deprecated and is not supported.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn393947(v=msads.90).aspx AdExtensionDimensionReportFilter Data Object
 * 
 * @uses DeviceOSReportFilter
 * @uses DeviceTypeReportFilter
 * @used-by AdExtensionDimensionReportRequest
 */
final class AdExtensionDimensionReportFilter
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
