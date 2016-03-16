<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the specified ad groups that exist within a specified campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277529(v=msads.90).aspx GetAdGroupsByIds Request Object
 * 
 * @used-by BingAdsCampaignManagementService::GetAdGroupsByIds
 */
final class GetAdGroupsByIdsRequest
{
    /**
     * The identifier of the campaign that contains the ad groups to get.
     *
     * @var int
     */
    public $CampaignId;
    /**
     * A maximum of 1,000 identifiers of the ad groups to get.
     *
     * @var int[]
     */
    public $AdGroupIds;
    /**
     * Determines whether or not the service should include the NativeBidAdjustment element within each retrieved AdGroup.
     *
     * @var bool
     */
    public $IncludeNativeBidAdjustment;
}
