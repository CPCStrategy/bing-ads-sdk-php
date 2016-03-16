<?php

namespace BingAds\CampaignManagement;

/**
 * Adds one or more campaigns to the specified account.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277510(v=msads.90).aspx AddCampaigns Response Object
 * 
 * @used-by BingAdsCampaignManagementService::AddCampaigns
 */
final class AddCampaignsResponse
{
    /**
     * An array of long values that represents the identifiers for the campaigns that were added.
     *
     * @var int[]
     */
    public $CampaignIds;
}
