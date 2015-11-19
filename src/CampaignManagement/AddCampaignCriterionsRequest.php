<?php

namespace BingAds\CampaignManagement;

/**
 * This feature is currently in pilot and will be generally available soon.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913127(v=msads.90).aspx AddCampaignCriterions Request Object
 *
 * @uses CampaignCriterion
 * @uses CampaignCriterionType
 * @used-by BingAdsCampaignManagementService::AddCampaignCriterions
 */
final class AddCampaignCriterionsRequest
{
    /**
     * A list of criterions that help determine whether ads in each campaign get served.
     *
     * @var CampaignCriterion[]
     */
    public $CampaignCriterions;
    /**
     * The type of campaign criterion to add, for example ProductScope.
     *
     * @var CampaignCriterionType
     */
    public $CriterionType;
}
