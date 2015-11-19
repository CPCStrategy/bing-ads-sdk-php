<?php

namespace BingAds\CampaignManagement;

/**
 * This service operation is reserved for future use.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277499(v=msads.100).aspx AddAdGroupCriterions Request Object
 * 
 * @uses AdGroupCriterion
 * @uses CriterionType
 * @used-by BingAdsCampaignManagementService::AddAdGroupCriterions
 */
final class AddAdGroupCriterionsRequest
{
    public $AccountId;
    public $AdGroupCriterions;
    public $CriterionType;
}
