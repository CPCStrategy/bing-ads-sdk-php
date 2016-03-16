<?php

namespace BingAds\Bulk;

/**
 * Downloads the specified campaigns' data.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj885756(v=msads.90).aspx DownloadCampaignsByCampaignIds Request Object
 * 
 * @uses CampaignScope
 * @uses DataScope
 * @uses DownloadFileType
 * @uses BulkDownloadEntity
 * @uses PerformanceStatsDateRange
 * @used-by BingAdsBulkService::DownloadCampaignsByCampaignIds
 */
final class DownloadCampaignsByCampaignIdsRequest
{
    public $Campaigns;
    public $DataScope;
    public $DownloadFileType;
    public $Entities;
    public $FormatVersion;
    public $LastSyncTimeInUTC;
    public $LocationTargetVersion;
    public $PerformanceStatsDateRange;
}
