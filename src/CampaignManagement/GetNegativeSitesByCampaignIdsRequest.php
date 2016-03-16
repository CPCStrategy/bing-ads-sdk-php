<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the negative site URLs of the specified campaigns.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277525(v=msads.90).aspx GetNegativeSitesByCampaignIds Request Object
 * 
 * @used-by BingAdsCampaignManagementService::GetNegativeSitesByCampaignIds
 */
final class GetNegativeSitesByCampaignIdsRequest
{
    /**
     * The identifier of the account that contains the campaigns.
     *
     * @var int
     */
    public $AccountId;
    /**
     * An array of identifiers of the campaigns that contain the negative site URLs that you want to get.
     *
     * @var int[]
     */
    public $CampaignIds;
}
