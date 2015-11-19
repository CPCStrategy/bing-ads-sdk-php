<?php

namespace BingAds\CampaignManagement;

/**
 * Adds one or more campaign criterions that help determine whether ads in each campaign get served.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913127(v=msads.100).aspx AddCampaignCriterions Response Object
 * 
 * @uses BatchErrorCollection
 * @used-by BingAdsCampaignManagementService::AddCampaignCriterions
 */
final class AddCampaignCriterionsResponse
{
    public $CampaignCriterionIds;
    public $NestedPartialErrors;
}
