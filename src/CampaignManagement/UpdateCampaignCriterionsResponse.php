<?php

namespace BingAds\CampaignManagement;

/**
 * Updates one or more campaign criterions.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913121(v=msads.100).aspx UpdateCampaignCriterions Response Object
 * 
 * @uses BatchErrorCollection
 * @used-by BingAdsCampaignManagementService::UpdateCampaignCriterions
 */
final class UpdateCampaignCriterionsResponse
{
    public $NestedPartialErrors;
}
