<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the specified types of criterions from the specified campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913136(v=msads.90).aspx GetCampaignCriterionsByCampaignId Response Object
 * 
 * @uses CampaignCriterion
 * @used-by BingAdsCampaignManagementService::GetCampaignCriterionsByCampaignId
 */
final class GetCampaignCriterionsByCampaignIdResponse
{
    /**
     * The list of criterions that you requested.
     *
     * @var CampaignCriterion[]
     */
    public $CampaignCriterions;
}
