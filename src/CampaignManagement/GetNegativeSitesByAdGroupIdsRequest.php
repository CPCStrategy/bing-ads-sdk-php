<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the negative site URLs of the specified ad groups.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277521(v=msads.90).aspx GetNegativeSitesByAdGroupIds Request Object
 * 
 * @used-by BingAdsCampaignManagementService::GetNegativeSitesByAdGroupIds
 */
final class GetNegativeSitesByAdGroupIdsRequest
{
    /**
     * The identifier of the campaign that contains the ad groups.
     *
     * @var int
     */
    public $CampaignId;
    /**
     * An array of identifiers of the ad groups that contain the negative site URLs that you want to get.
     *
     * @var int[]
     */
    public $AdGroupIds;
}
