<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the ad extension by keyword report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn393943(v=msads.90).aspx AdExtensionByKeywordReportFilter Data Object
 * 
 * @uses DeviceOSReportFilter
 * @uses DeviceTypeReportFilter
 * @used-by AdExtensionByKeywordReportRequest
 */
final class AdExtensionByKeywordReportFilter
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
