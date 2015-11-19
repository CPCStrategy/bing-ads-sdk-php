<?php

namespace BingAds\CampaignManagement;

/**
 * Updates one or more campaign criterions.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913121(v=msads.90).aspx UpdateCampaignCriterions Request Object
 * 
 * @uses CampaignCriterion
 * @uses CampaignCriterionType
 * @used-by BingAdsCampaignManagementService::UpdateCampaignCriterions
 */
final class UpdateCampaignCriterionsRequest
{
    /**
     * The list of campaign criterions to update.
     *
     * @var CampaignCriterion[]
     */
    public $CampaignCriterions;
    /**
     * The type of campaign criterion to update, for example ProductScope.
     *
     * @var CampaignCriterionType
     */
    public $CriterionType;
}
