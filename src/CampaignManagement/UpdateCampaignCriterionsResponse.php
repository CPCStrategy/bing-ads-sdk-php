<?php

namespace BingAds\CampaignManagement;

/**
 * This feature is currently in pilot and will be generally available soon.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913121(v=msads.90).aspx UpdateCampaignCriterions Response Object
 *
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::UpdateCampaignCriterions
 */
final class UpdateCampaignCriterionsResponse
{
    /**
     * An array of BatchError objects that contain details for any list items that were not successfully updated.
     *
     * @var BatchError[]
     */
    public $PartialErrors;
}
