<?php

namespace BingAds\Bulk;

/**
 * Defines an object that identifies a campaign to download.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj134990(v=msads.90).aspx CampaignScope Data Object
 *
 * @used-by DownloadCampaignsByCampaignIdsRequest
 */
final class CampaignScope
{
    /**
     * The identifier of the campaign to download.
     *
     * @var int
     */
    public $CampaignId;
    /**
     * The identifier of the account that owns the campaign to download.
     *
     * @var int
     */
    public $ParentAccountId;
}
