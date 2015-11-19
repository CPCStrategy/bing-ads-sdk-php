<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the negative site URLs of the specified campaigns.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277525(v=msads.100).aspx GetNegativeSitesByCampaignIds Response Object
 * 
 * @uses CampaignNegativeSites
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::GetNegativeSitesByCampaignIds
 */
final class GetNegativeSitesByCampaignIdsResponse
{
    public $CampaignNegativeSites;
    public $PartialErrors;
}
