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
    /**
     * The campaigns to download.
     *
     * @var CampaignScope[]
     */
    public $Campaigns;
    /**
     * You may include performance data such as spend, in addition to entity data such as campaign settings.
     *
     * @var DataScope
     */
    public $DataScope;
    /**
     * The format of the download file.
     *
     * @var DownloadFileType
     */
    public $DownloadFileType;
    /**
     * The entities to include in the download.
     *
     * @var BulkDownloadEntity
     */
    public $Entities;
    /**
     * The format for records of the download file.
     *
     * @var string
     */
    public $FormatVersion;
    /**
     * The last time that you requested a download.
     *
     * @var \DateTime
     */
    public $LastSyncTimeInUTC;
    /**
     * The version of the location codes to return if the target contains location targets.
     *
     * @var string
     */
    public $LocationTargetVersion;
    /**
     * Defines the start and end date when downloading performance data.
     *
     * @var PerformanceStatsDateRange
     */
    public $PerformanceStatsDateRange;
}
