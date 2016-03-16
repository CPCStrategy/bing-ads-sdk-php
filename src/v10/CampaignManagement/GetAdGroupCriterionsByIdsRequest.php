<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Gets the specified criterions.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277520(v=msads.100).aspx GetAdGroupCriterionsByIds Request Object
 * 
 * @uses CriterionType
 * @used-by BingAdsCampaignManagementService::GetAdGroupCriterionsByIds
 */
final class GetAdGroupCriterionsByIdsRequest
{
    public $AccountId;
    public $AdGroupCriterionIds;
    public $AdGroupId;
    public $CriterionType;
}
