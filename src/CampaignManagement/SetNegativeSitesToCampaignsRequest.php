<?php

namespace BingAds\CampaignManagement;

/**
 * Sets the negative site URLs of the specified campaigns.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277504(v=msads.90).aspx SetNegativeSitesToCampaigns Request Object
 * 
 * @uses CampaignNegativeSites
 * @used-by BingAdsCampaignManagementService::SetNegativeSitesToCampaigns
 */
final class SetNegativeSitesToCampaignsRequest
{
    /**
     * The identifier of the account that contains the campaigns.
     *
     * @var int
     */
    public $AccountId;
    /**
     * An array of CampaignNegativeSites objects that identify the campaigns to update with the specified negative site URLs.
     *
     * @var CampaignNegativeSites[]
     */
    public $CampaignNegativeSites;
}
