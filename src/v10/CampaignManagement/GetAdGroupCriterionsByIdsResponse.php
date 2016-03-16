<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Gets the specified criterions.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277520(v=msads.100).aspx GetAdGroupCriterionsByIds Response Object
 * 
 * @uses AdGroupCriterion
 * @used-by BingAdsCampaignManagementService::GetAdGroupCriterionsByIds
 */
final class GetAdGroupCriterionsByIdsResponse
{
    public $AdGroupCriterions;
}
