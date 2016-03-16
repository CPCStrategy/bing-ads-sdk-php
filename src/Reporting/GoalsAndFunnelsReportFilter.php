<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the goals and funnels report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/gg262854(v=msads.90).aspx GoalsAndFunnelsReportFilter Data Object
 * 
 * @uses AdDistributionReportFilter
 * @uses DeviceOSReportFilter
 * @uses DeviceTypeReportFilter
 * @used-by GoalsAndFunnelsReportRequest
 */
final class GoalsAndFunnelsReportFilter
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
     * The report will include data for only the specified goals.
     *
     * @var int[]
     */
    public $GoalIds;
}
