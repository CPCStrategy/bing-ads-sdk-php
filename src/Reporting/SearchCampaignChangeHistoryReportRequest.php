<?php

namespace BingAds\Reporting;

/**
 * Defines a change history report request.
 *
 * @link http://msdn.microsoft.com/en-us/library/hh912357(v=msads.90).aspx SearchCampaignChangeHistoryReportRequest Data Object
 * 
 * @uses SearchCampaignChangeHistoryReportColumn
 * @uses SearchCampaignChangeHistoryReportFilter
 * @uses AccountThroughAdGroupReportScope
 * @uses ReportTime
 */
final class SearchCampaignChangeHistoryReportRequest extends ReportRequest
{
    /**
     * The list of attributes and performance statistics to include in the report.
     *
     * @var SearchCampaignChangeHistoryReportColumn[]
     */
    public $Columns;
    /**
     * The filter information to use to filter the report data.
     *
     * @var SearchCampaignChangeHistoryReportFilter
     */
    public $Filter;
    /**
     * The scope of the report.
     *
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;
    /**
     * The time period to use for the report.
     *
     * @var ReportTime
     */
    public $Time;
}
