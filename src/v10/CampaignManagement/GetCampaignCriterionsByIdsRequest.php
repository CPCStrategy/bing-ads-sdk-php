<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Gets the specified campaign criterions.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913135(v=msads.100).aspx GetCampaignCriterionsByIds Request Object
 * 
 * @uses CampaignCriterionType
 * @used-by BingAdsCampaignManagementService::GetCampaignCriterionsByIds
 */
final class GetCampaignCriterionsByIdsRequest
{
    public $CampaignCriterionIds;
    public $CampaignId;
    public $CriterionType;
}
