<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the negative site URLs of the specified ad groups.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277521(v=msads.90).aspx GetNegativeSitesByAdGroupIds Response Object
 *
 * @uses AdGroupNegativeSites
 * @used-by BingAdsCampaignManagementService::GetNegativeSitesByAdGroupIds
 */
final class GetNegativeSitesByAdGroupIdsResponse
{
    /**
     * An array of AdGroupNegativeSites objects that contains the negative site URLs of the specified ad groups.
     *
     * @var AdGroupNegativeSites[]
     */
    public $AdGroupNegativeSites;
}
