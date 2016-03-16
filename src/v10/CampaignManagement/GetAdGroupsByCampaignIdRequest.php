<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Gets the ad groups that exist within a specified campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277524(v=msads.100).aspx GetAdGroupsByCampaignId Request Object
 * 
 * @used-by BingAdsCampaignManagementService::GetAdGroupsByCampaignId
 */
final class GetAdGroupsByCampaignIdRequest
{
    public $CampaignId;
}
