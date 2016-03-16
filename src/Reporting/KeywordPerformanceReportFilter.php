<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the keyword performance report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb672082(v=msads.90).aspx KeywordPerformanceReportFilter Data Object
 * 
 * @uses AdDistributionReportFilter
 * @uses AdTypeReportFilter
 * @uses BidMatchTypeReportFilter
 * @uses DeliveredMatchTypeReportFilter
 * @uses DeviceTypeReportFilter
 * @used-by KeywordPerformanceReportRequest
 */
final class KeywordPerformanceReportFilter
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
     * The report will include data for only the specified bid match types (as opposed to the delivered match type).
     *
     * @var BidMatchTypeReportFilter
     */
    public $BidMatchType;
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
     * A numeric score that indicates how likely your ads will be clicked and how well your keyword competes against other keywords targeting the same traffic.
     *
     * @var int[]
     */
    public $KeywordRelevance;
    /**
     * The report will include data for only the specified keywords.
     *
     * @var string[]
     */
    public $Keywords;
    /**
     * A numeric score that indicates whether your landing page is likely to provide a good experience to customers who click your ad and land on your website.
     *
     * @var int[]
     */
    public $LandingPageRelevance;
    /**
     * A numeric score that indicates whether your landing page is likely to provide a good experience to customers who click your ad and land on your website.
     *
     * @var int[]
     */
    public $LandingPageUserExperience;
    /**
     * The report will include data for only websites that used the specified languages.
     *
     * @var string[]
     */
    public $LanguageCode;
    /**
     * The report will include data for only keywords with the specified quality scores.
     *
     * @var int[]
     */
    public $QualityScore;
}
