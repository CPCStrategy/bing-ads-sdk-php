<?php

namespace BingAds\CampaignManagement;

/**
 * Adds one or more campaigns to the specified account.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277510(v=msads.90).aspx AddCampaigns Request Object
 *
 * @uses Campaign
 * @used-by BingAdsCampaignManagementService::AddCampaigns
 */
final class AddCampaignsRequest
{
    /**
     * The identifier of the account to add the campaigns to.
     *
     * @var int
     */
    public $AccountId;
    /**
     * An array of Campaign objects to add to the specified account.
     *
     * @var Campaign[]
     */
    public $Campaigns;
}
