<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the specified types of criterions from the specified campaign.
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
