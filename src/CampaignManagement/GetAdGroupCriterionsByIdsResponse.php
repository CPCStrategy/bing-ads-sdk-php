<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the specified criterions.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277520(v=msads.90).aspx GetAdGroupCriterionsByIds Response Object
 * 
 * @uses AdGroupCriterion
 * @used-by BingAdsCampaignManagementService::GetAdGroupCriterionsByIds
 */
final class GetAdGroupCriterionsByIdsResponse
{
    /**
     * The list of criterions that correspond directly to the identifiers specified in the request.
     *
     * @var AdGroupCriterion[]
     */
    public $AdGroupCriterions;
}
