<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Deletes one or more ad groups in a specified campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236307(v=msads.100).aspx DeleteAdGroups Request Object
 * 
 * @used-by BingAdsCampaignManagementService::DeleteAdGroups
 */
final class DeleteAdGroupsRequest
{
    public $CampaignId;
    public $AdGroupIds;
}
