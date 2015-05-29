<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the ad extension detail report.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn610806(v=msads.90).aspx AdExtensionDetailReportFilter Data Object
 *
 * @uses DeviceOSReportFilter
 * @uses DeviceTypeReportFilter
 * @used-by AdExtensionDetailReportRequest
 */
final class AdExtensionDetailReportFilter
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
