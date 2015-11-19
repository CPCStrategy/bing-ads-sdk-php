<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the search query performance report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/ee703961(v=msads.90).aspx SearchQueryPerformanceReportFilter Data Object
 * 
 * @uses AdStatusReportFilter
 * @uses AdTypeReportFilter
 * @uses CampaignStatusReportFilter
 * @uses DeliveredMatchTypeReportFilter
 * @used-by SearchQueryPerformanceReportRequest
 */
final class SearchQueryPerformanceReportFilter
{
    /**
     * The report will include data for ads that have the specified status value.
     *
     * @var AdStatusReportFilter
     */
    public $AdStatus;
    /**
     * The report will include data for only the specified ad types.
     *
     * @var AdTypeReportFilter
     */
    public $AdType;
    /**
     * The report will include data for campaigns that have the specified status value.
     *
     * @var CampaignStatusReportFilter
     */
    public $CampaignStatus;
    /**
     * The report will include data for only the specified delivered match types (as opposed to the bid match type).
     *
     * @var DeliveredMatchTypeReportFilter
     */
    public $DeliveredMatchType;
    /**
     * If the value of this element is set to true, search terms that had one or more ad impressions but resulted in zero clicks in the specified time duration will be excluded from the report.
     *
     * @var bool
     */
    public $ExcludeZeroClicks;
    /**
     * The report will include data for only websites that used the specified languages.
     *
     * @var string[]
     */
    public $LanguageCode;
    /**
     * The report will include data for only the specified search query strings.
     *
     * @var string[]
     */
    public $SearchQueries;
}
