<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the geographical location performance report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743754(v=msads.90).aspx GeoLocationPerformanceReportFilter Data Object
 *
 * @uses AdDistributionReportFilter
 * @used-by GeoLocationPerformanceReportRequest
 */
final class GeoLocationPerformanceReportFilter
{
    /**
     * The report will include data for only the specified distribution medium.
     *
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;
    /**
     * The report will include data for only the specified countries/regions where the user that clicked the ad is located.
     *
     * @var string[]
     */
    public $CountryCode;
    /**
     * The report will include data for only websites that used the specified languages.
     *
     * @var string[]
     */
    public $LanguageCode;
}
