<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves the negative keywords that are only associated to the specified campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277519(v=msads.90).aspx GetNegativeKeywordsByCampaignIds Request Object
 * 
 * @used-by BingAdsCampaignManagementService::GetNegativeKeywordsByCampaignIds
 */
final class GetNegativeKeywordsByCampaignIdsRequest
{
    /**
     * The identifier of the account that contains the campaigns.
     *
     * @var int
     */
    public $AccountId;
    /**
     * An array of identifiers of the campaigns that contain the negative keywords that you want to get.
     *
     * @var int[]
     */
    public $CampaignIds;
}
