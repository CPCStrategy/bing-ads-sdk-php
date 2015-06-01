<?php

namespace BingAds\CampaignManagement;

/**
 * Updates the specified ad groups in a specified campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277528(v=msads.90).aspx UpdateAdGroups Request Object
 *
 * @uses AdGroup
 * @used-by BingAdsCampaignManagementService::UpdateAdGroups
 */
final class UpdateAdGroupsRequest
{
    /**
     * The identifier of the campaign that owns the ad groups to update.
     *
     * @var int
     */
    public $CampaignId;
    /**
     * An array that can contain a maximum of 1,000 AdGroup objects to update.
     *
     * @var AdGroup[]
     */
    public $AdGroups;
}
