<?php

namespace BingAds\CampaignManagement;

/**
 * Updates one or more campaign criterions.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913121(v=msads.90).aspx UpdateCampaignCriterions Response Object
 * 
 * @uses BatchErrorCollection
 * @used-by BingAdsCampaignManagementService::UpdateCampaignCriterions
 */
final class UpdateCampaignCriterionsResponse
{
    /**
     * An array of BatchErrorCollection objects that contain details for any conditions that were not successfully updated for the criterion.
     *
     * @var BatchErrorCollection[]
     */
    public $NestedPartialErrors;
}
