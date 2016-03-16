<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Gets the negative site URLs of the specified ad groups.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277521(v=msads.100).aspx GetNegativeSitesByAdGroupIds Response Object
 * 
 * @uses AdGroupNegativeSites
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::GetNegativeSitesByAdGroupIds
 */
final class GetNegativeSitesByAdGroupIdsResponse
{
    public $AdGroupNegativeSites;
    public $PartialErrors;
}
