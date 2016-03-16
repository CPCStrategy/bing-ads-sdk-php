<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Deletes one or more campaign criterions.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913125(v=msads.100).aspx DeleteCampaignCriterions Request Object
 * 
 * @uses CampaignCriterionType
 * @used-by BingAdsCampaignManagementService::DeleteCampaignCriterions
 */
final class DeleteCampaignCriterionsRequest
{
    public $CampaignCriterionIds;
    public $CriterionType;
}
