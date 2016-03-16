<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the campaign performance report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671808(v=msads.90).aspx CampaignPerformanceReportFilter Data Object
 * 
 * @uses AdDistributionReportFilter
 * @uses DeviceOSReportFilter
 * @uses DeviceTypeReportFilter
 * @uses CampaignStatusReportFilter
 * @used-by CampaignPerformanceReportRequest
 */
final class CampaignPerformanceReportFilter
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
    /**
     * The report will include data for only the specified ad group status values.
     *
     * @var CampaignStatusReportFilter
     */
    public $Status;
}
