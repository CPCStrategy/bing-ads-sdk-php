<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Deletes one or more campaigns in a specified account.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236314(v=msads.100).aspx DeleteCampaigns Request Object
 * 
 * @used-by BingAdsCampaignManagementService::DeleteCampaigns
 */
final class DeleteCampaignsRequest
{
    public $AccountId;
    public $CampaignIds;
}
