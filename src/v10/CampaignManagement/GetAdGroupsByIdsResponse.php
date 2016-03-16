<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Gets the specified ad groups that exist within a specified campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277529(v=msads.100).aspx GetAdGroupsByIds Response Object
 * 
 * @uses AdGroup
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::GetAdGroupsByIds
 */
final class GetAdGroupsByIdsResponse
{
    public $AdGroups;
    public $PartialErrors;
}
