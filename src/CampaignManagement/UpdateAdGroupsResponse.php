<?php

namespace BingAds\CampaignManagement;

/**
 * Updates the specified ad groups in a specified campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277528(v=msads.100).aspx UpdateAdGroups Response Object
 * 
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::UpdateAdGroups
 */
final class UpdateAdGroupsResponse
{
    public $PartialErrors;
}
