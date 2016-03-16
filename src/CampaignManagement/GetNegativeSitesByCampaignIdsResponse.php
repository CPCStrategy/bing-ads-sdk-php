<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the negative site URLs of the specified campaigns.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277525(v=msads.90).aspx GetNegativeSitesByCampaignIds Response Object
 * 
 * @uses CampaignNegativeSites
 * @used-by BingAdsCampaignManagementService::GetNegativeSitesByCampaignIds
 */
final class GetNegativeSitesByCampaignIdsResponse
{
    /**
     * An array of CampaignNegativeSites objects that contain the negative site URLs of the specified campaigns.
     *
     * @var CampaignNegativeSites[]
     */
    public $CampaignNegativeSites;
}
