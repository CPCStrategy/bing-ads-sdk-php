<?php

namespace BingAds\CampaignManagement;

/**
 * This service operation is reserved for future use.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236302(v=msads.100).aspx DeleteAdGroupCriterions Request Object
 * 
 * @uses CriterionType
 * @used-by BingAdsCampaignManagementService::DeleteAdGroupCriterions
 */
final class DeleteAdGroupCriterionsRequest
{
    public $AccountId;
    public $AdGroupCriterionIds;
    public $AdGroupId;
    public $CriterionType;
}
