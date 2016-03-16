<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the specified campaign criterions.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913135(v=msads.90).aspx GetCampaignCriterionsByIds Request Object
 * 
 * @uses CampaignCriterionType
 * @used-by BingAdsCampaignManagementService::GetCampaignCriterionsByIds
 */
final class GetCampaignCriterionsByIdsRequest
{
    /**
     * A list of unique identifiers that identify the campaign criterions to get.
     *
     * @var int[]
     */
    public $CampaignCriterionIds;
    /**
     * The types of campaign criterion to get, for example ProductScope.
     *
     * @var CampaignCriterionType
     */
    public $CriterionType;
}
