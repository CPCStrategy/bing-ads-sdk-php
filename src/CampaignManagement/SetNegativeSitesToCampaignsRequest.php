<?php

namespace BingAds\CampaignManagement;

/**
 * Sets the negative site URLs of the specified campaigns.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277504(v=msads.100).aspx SetNegativeSitesToCampaigns Request Object
 * 
 * @uses CampaignNegativeSites
 * @used-by BingAdsCampaignManagementService::SetNegativeSitesToCampaigns
 */
final class SetNegativeSitesToCampaignsRequest
{
    public $AccountId;
    public $CampaignNegativeSites;
}
