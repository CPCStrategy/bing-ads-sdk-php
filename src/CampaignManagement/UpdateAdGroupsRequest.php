<?php

namespace BingAds\CampaignManagement;

/**
 * Updates the specified ad groups in a specified campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277528(v=msads.100).aspx UpdateAdGroups Request Object
 * 
 * @uses AdGroup
 * @used-by BingAdsCampaignManagementService::UpdateAdGroups
 */
final class UpdateAdGroupsRequest
{
    public $CampaignId;
    public $AdGroups;
    public $UpdateNativeBidAdjustment;
}
