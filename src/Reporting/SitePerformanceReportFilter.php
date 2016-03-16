<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the website performance report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/dd796955(v=msads.90).aspx SitePerformanceReportFilter Data Object
 * 
 * @uses AdDistributionReportFilter
 * @uses AdTypeReportFilter
 * @uses DeliveredMatchTypeReportFilter
 * @uses DeviceTypeReportFilter
 * @used-by SitePerformanceReportRequest
 */
final class SitePerformanceReportFilter
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
     * The report will include data for only the specified delivered match types (as opposed to the bid match type).
     *
     * @var DeliveredMatchTypeReportFilter
     */
    public $DeliveredMatchType;
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
    /**
     * The report will include data for only the specified websites.
     *
     * @var int[]
     */
    public $SiteIds;
}
