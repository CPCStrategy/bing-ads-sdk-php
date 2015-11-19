<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the negative site URLs of the specified campaigns.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277525(v=msads.100).aspx GetNegativeSitesByCampaignIds Request Object
 * 
 * @used-by BingAdsCampaignManagementService::GetNegativeSitesByCampaignIds
 */
final class GetNegativeSitesByCampaignIdsRequest
{
    public $AccountId;
    public $CampaignIds;
}
