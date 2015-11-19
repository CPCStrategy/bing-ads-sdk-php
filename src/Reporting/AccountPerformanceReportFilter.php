<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the account performance report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671671(v=msads.90).aspx AccountPerformanceReportFilter Data Object
 * 
 * @uses AdDistributionReportFilter
 * @uses DeviceOSReportFilter
 * @uses DeviceTypeReportFilter
 * @used-by AccountPerformanceReportRequest
 */
final class AccountPerformanceReportFilter
{
    /**
     * The report will include data for only the specified distribution medium.
     *
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;
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
