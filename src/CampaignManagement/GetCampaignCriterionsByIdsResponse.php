<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the specified campaign criterions.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913135(v=msads.90).aspx GetCampaignCriterionsByIds Response Object
 * 
 * @uses CampaignCriterion
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::GetCampaignCriterionsByIds
 */
final class GetCampaignCriterionsByIdsResponse
{
    /**
     * The list of campaign criterions that correspond directly to the identifiers specified in the request.
     *
     * @var CampaignCriterion[]
     */
    public $CampaignCriterions;
    /**
     * An array of BatchError objects that contain details for any list items that were not successfully returned.
     *
     * @var BatchError[]
     */
    public $PartialErrors;
}
