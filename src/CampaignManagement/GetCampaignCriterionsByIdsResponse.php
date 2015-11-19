<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the specified campaign criterions.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913135(v=msads.100).aspx GetCampaignCriterionsByIds Response Object
 * 
 * @uses CampaignCriterion
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::GetCampaignCriterionsByIds
 */
final class GetCampaignCriterionsByIdsResponse
{
    public $CampaignCriterions;
    public $PartialErrors;
}
