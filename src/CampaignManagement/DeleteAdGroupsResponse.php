<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes one or more ad groups in a specified campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236307(v=msads.100).aspx DeleteAdGroups Response Object
 * 
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::DeleteAdGroups
 */
final class DeleteAdGroupsResponse
{
    public $PartialErrors;
}
