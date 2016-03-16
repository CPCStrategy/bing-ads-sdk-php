<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Adds new ad groups to a specified campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277502(v=msads.100).aspx AddAdGroups Request Object
 * 
 * @uses AdGroup
 * @used-by BingAdsCampaignManagementService::AddAdGroups
 */
final class AddAdGroupsRequest
{
    public $CampaignId;
    public $AdGroups;
}
