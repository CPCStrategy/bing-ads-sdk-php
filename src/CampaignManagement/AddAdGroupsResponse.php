<?php

namespace BingAds\CampaignManagement;

/**
 * Adds new ad groups to a specified campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277502(v=msads.90).aspx AddAdGroups Response Object
 *
 * @used-by BingAdsCampaignManagementService::AddAdGroups
 */
final class AddAdGroupsResponse
{
    /**
     * An array of long values that represents the identifiers for the ad groups that were added.
     *
     * @var integer[]
     */
    public $AdGroupIds;
}
