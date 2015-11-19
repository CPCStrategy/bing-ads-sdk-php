<?php

namespace BingAds\CampaignManagement;

/**
 * This feature is currently in pilot and will be generally available soon.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913136(v=msads.90).aspx GetCampaignCriterionsByCampaignId Request Object
 *
 * @uses CampaignCriterionType
 * @used-by BingAdsCampaignManagementService::GetCampaignCriterionsByCampaignId
 */
final class GetCampaignCriterionsByCampaignIdRequest
{
    /**
     * The identifier of the campaign that contains the criterions to get.
     *
     * @var int
     */
    public $CampaignId;
    /**
     * The types of campaign criterion to get, for example ProductScope.
     *
     * @var CampaignCriterionType
     */
    public $CriterionType;
}
