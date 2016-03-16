<?php

namespace BingAds\v10\Bulk;

/**
 * Downloads an account's campaign data.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj885755(v=msads.100).aspx DownloadCampaignsByAccountIds Request Object
 * 
 * @uses CompressionType
 * @uses DataScope
 * @uses DownloadFileType
 * @uses BulkDownloadEntity
 * @uses PerformanceStatsDateRange
 * @used-by BingAdsBulkService::DownloadCampaignsByAccountIds
 */
final class DownloadCampaignsByAccountIdsRequest
{
    public $AccountIds;
    public $CompressionType;
    public $DataScope;
    public $DownloadFileType;
    public $Entities;
    public $FormatVersion;
    public $LastSyncTimeInUTC;
    public $PerformanceStatsDateRange;
}
