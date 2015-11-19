<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the ad groups that exist within a specified campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277524(v=msads.100).aspx GetAdGroupsByCampaignId Response Object
 * 
 * @uses AdGroup
 * @used-by BingAdsCampaignManagementService::GetAdGroupsByCampaignId
 */
final class GetAdGroupsByCampaignIdResponse
{
    public $AdGroups;
}
