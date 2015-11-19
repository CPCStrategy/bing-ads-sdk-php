<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes one or more campaign criterions.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913125(v=msads.90).aspx DeleteCampaignCriterions Request Object
 * 
 * @uses CampaignCriterionType
 * @used-by BingAdsCampaignManagementService::DeleteCampaignCriterions
 */
final class DeleteCampaignCriterionsRequest
{
    /**
     * A list of unique system identifiers corresponding to the campaign criterions that you want to delete.
     *
     * @var int[]
     */
    public $CampaignCriterionIds;
    /**
     * The type of campaign criterion, for example ProductScope.
     *
     * @var CampaignCriterionType
     */
    public $CriterionType;
}
