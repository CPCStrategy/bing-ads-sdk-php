<?php

namespace BingAds\CampaignManagement;

/**
 * Adds new ad groups to a specified campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277502(v=msads.90).aspx AddAdGroups Request Object
 *
 * @uses AdGroup
 * @used-by BingAdsCampaignManagementService::AddAdGroups
 */
final class AddAdGroupsRequest
{
    /**
     * The identifier of the campaign to add the ad groups to.
     *
     * @var int
     */
    public $CampaignId;
    /**
     * An array of AdGroup objects to add to the specified campaign.
     *
     * @var AdGroup[]
     */
    public $AdGroups;
}
