<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the negative site URLs of the specified ad groups.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277521(v=msads.100).aspx GetNegativeSitesByAdGroupIds Request Object
 * 
 * @used-by BingAdsCampaignManagementService::GetNegativeSitesByAdGroupIds
 */
final class GetNegativeSitesByAdGroupIdsRequest
{
    public $CampaignId;
    public $AdGroupIds;
}
