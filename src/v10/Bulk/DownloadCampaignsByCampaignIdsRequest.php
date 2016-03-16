<?php

namespace BingAds\v10\Bulk;

/**
 * Downloads the specified campaigns' data.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj885756(v=msads.100).aspx DownloadCampaignsByCampaignIds Request Object
 * 
 * @uses CampaignScope
 * @uses CompressionType
 * @uses DataScope
 * @uses DownloadFileType
 * @uses BulkDownloadEntity
 * @uses PerformanceStatsDateRange
 * @used-by BingAdsBulkService::DownloadCampaignsByCampaignIds
 */
final class DownloadCampaignsByCampaignIdsRequest
{
    public $Campaigns;
    public $CompressionType;
    public $DataScope;
    public $DownloadFileType;
    public $Entities;
    public $FormatVersion;
    public $LastSyncTimeInUTC;
    public $PerformanceStatsDateRange;
}
