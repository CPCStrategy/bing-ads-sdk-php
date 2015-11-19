<?php

namespace BingAds\Bulk;

/**
 * Defines the date range values for the requested performance data in a bulk download.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn249975(v=msads.90).aspx PerformanceStatsDateRange Data Object
 * 
 * @uses Date
 * @uses ReportTimePeriod
 * @used-by DownloadCampaignsByAccountIdsRequest
 * @used-by DownloadCampaignsByCampaignIdsRequest
 */
final class PerformanceStatsDateRange
{
    /**
     * The end date of the custom date range.
     *
     * @var Date
     */
    public $CustomDateRangeEnd;
    /**
     * The start date of the custom date range.
     *
     * @var Date
     */
    public $CustomDateRangeStart;
    /**
     * A predefined date range value.
     *
     * @var ReportTimePeriod
     */
    public $PredefinedTime;
}
