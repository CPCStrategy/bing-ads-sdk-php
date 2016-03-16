<?php

namespace BingAds\v10\CampaignManagement;

/**
 * This service operation is reserved for future use.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277527(v=msads.100).aspx UpdateAdGroupCriterions Request Object
 * 
 * @uses AdGroupCriterion
 * @uses CriterionType
 * @used-by BingAdsCampaignManagementService::UpdateAdGroupCriterions
 */
final class UpdateAdGroupCriterionsRequest
{
    public $AccountId;
    public $AdGroupCriterions;
    public $CriterionType;
}
