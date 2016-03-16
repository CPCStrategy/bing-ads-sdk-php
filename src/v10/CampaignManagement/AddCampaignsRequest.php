<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Adds one or more campaigns to the specified account.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277510(v=msads.100).aspx AddCampaigns Request Object
 * 
 * @uses Campaign
 * @used-by BingAdsCampaignManagementService::AddCampaigns
 */
final class AddCampaignsRequest
{
    public $AccountId;
    public $Campaigns;
}
