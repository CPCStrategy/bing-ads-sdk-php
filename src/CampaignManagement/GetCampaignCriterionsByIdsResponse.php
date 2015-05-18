<?php

namespace BingAds\CampaignManagement;

/**
 * This feature is currently in pilot and will be generally available soon.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913135(v=msads.90).aspx GetCampaignCriterionsByIds Response Object
 *
 * @uses CampaignCriterion
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::GetCampaignCriterionsByIds
 */
final class GetCampaignCriterionsByIdsResponse
{
    public $CampaignCriterions;
    /**
     * An array of BatchError objects that contain details for any list items that were not successfully returned.
     *
     * @var BatchError[]
     */
    public $PartialErrors;
}
