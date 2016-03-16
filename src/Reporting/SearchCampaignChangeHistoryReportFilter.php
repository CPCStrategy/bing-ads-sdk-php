<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the campaign change history report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/hh912356(v=msads.90).aspx SearchCampaignChangeHistoryReportFilter Data Object
 * 
 * @uses AdDistributionReportFilter
 * @uses ChangeTypeReportFilter
 * @uses ChangeEntityReportFilter
 * @used-by SearchCampaignChangeHistoryReportRequest
 */
final class SearchCampaignChangeHistoryReportFilter
{
    /**
     * The report will include data for only the specified distribution medium.
     *
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;
    /**
     * The report will include data for only the specified type of change.
     *
     * @var ChangeTypeReportFilter
     */
    public $HowChanged;
    /**
     * The report will include data for only the specified type of entity.
     *
     * @var ChangeEntityReportFilter
     */
    public $ItemChanged;
}
