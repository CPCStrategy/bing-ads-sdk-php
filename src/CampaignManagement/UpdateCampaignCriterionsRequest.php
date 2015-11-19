<?php

namespace BingAds\CampaignManagement;

/**
 * Updates one or more campaign criterions.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913121(v=msads.100).aspx UpdateCampaignCriterions Request Object
 * 
 * @uses CampaignCriterion
 * @uses CampaignCriterionType
 * @used-by BingAdsCampaignManagementService::UpdateCampaignCriterions
 */
final class UpdateCampaignCriterionsRequest
{
    public $CampaignCriterions;
    public $CriterionType;
}
