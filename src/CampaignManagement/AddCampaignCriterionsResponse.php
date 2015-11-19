<?php

namespace BingAds\CampaignManagement;

/**
 * This feature is currently in pilot and will be generally available soon.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913127(v=msads.90).aspx AddCampaignCriterions Response Object
 *
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::AddCampaignCriterions
 */
final class AddCampaignCriterionsResponse
{
    /**
     * A list of identifiers that identify the criterion that were added.
     *
     * @var integer[]
     */
    public $CampaignCriterionIds;
    /**
     * An array of BatchError objects that contain details for any list items that were not successfully added.
     *
     * @var BatchError[]
     */
    public $PartialErrors;
}
