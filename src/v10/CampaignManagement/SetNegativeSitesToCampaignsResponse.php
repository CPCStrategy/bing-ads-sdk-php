<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Sets the negative site URLs of the specified campaigns.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277504(v=msads.100).aspx SetNegativeSitesToCampaigns Response Object
 * 
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::SetNegativeSitesToCampaigns
 */
final class SetNegativeSitesToCampaignsResponse
{
    public $PartialErrors;
}
