<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves the negative keywords that are only associated to the specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277514(v=msads.90).aspx GetNegativeKeywordsByAdGroupIds Request Object
 * 
 * @used-by BingAdsCampaignManagementService::GetNegativeKeywordsByAdGroupIds
 */
final class GetNegativeKeywordsByAdGroupIdsRequest
{
    /**
     * The identifier of the campaign that contains the ad groups.
     *
     * @var int
     */
    public $CampaignId;
    /**
     * An array of identifiers of the ad groups that contain the negative keywords that you want to get.
     *
     * @var int[]
     */
    public $AdGroupIds;
}
