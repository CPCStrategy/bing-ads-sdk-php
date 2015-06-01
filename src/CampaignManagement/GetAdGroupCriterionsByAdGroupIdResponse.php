<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the specified types of criterions from the specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277517(v=msads.90).aspx GetAdGroupCriterionsByAdGroupId Response Object
 *
 * @uses AdGroupCriterion
 * @used-by BingAdsCampaignManagementService::GetAdGroupCriterionsByAdGroupId
 */
final class GetAdGroupCriterionsByAdGroupIdResponse
{
    /**
     * The list of criterions that you requested.
     *
     * @var AdGroupCriterion[]
     */
    public $AdGroupCriterions;
}
