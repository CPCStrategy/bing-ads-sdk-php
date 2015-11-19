<?php

namespace BingAds\CampaignManagement;

/**
 * Updates specified campaigns in a specified account.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277536(v=msads.100).aspx UpdateCampaigns Request Object
 * 
 * @uses Campaign
 * @used-by BingAdsCampaignManagementService::UpdateCampaigns
 */
final class UpdateCampaignsRequest
{
    public $AccountId;
    public $Campaigns;
}
