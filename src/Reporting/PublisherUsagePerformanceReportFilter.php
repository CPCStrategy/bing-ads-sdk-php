<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the publisher usage performance report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/dd796865(v=msads.90).aspx PublisherUsagePerformanceReportFilter Data Object
 *
 * @uses AdDistributionReportFilter
 * @uses PricingModelReportFilter
 * @used-by PublisherUsagePerformanceReportRequest
 */
final class PublisherUsagePerformanceReportFilter
{
    /**
     * The report will include data for only the specified distribution medium.
     *
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;
    /**
     * The report will include data for only websites that used the specified languages.
     *
     * @var string[]
     */
    public $LanguageCode;
    /**
     * The report will include data for only the specified pricing model.
     *
     * @var PricingModelReportFilter
     */
    public $PricingModel;
}
