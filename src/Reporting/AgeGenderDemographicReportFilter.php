<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the gender demographic report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671580(v=msads.90).aspx AgeGenderDemographicReportFilter Data Object
 * 
 * @uses AdDistributionReportFilter
 * @used-by AgeGenderDemographicReportRequest
 */
final class AgeGenderDemographicReportFilter
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
}
