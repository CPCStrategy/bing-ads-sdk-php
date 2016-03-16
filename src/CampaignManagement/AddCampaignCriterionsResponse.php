<?php

namespace BingAds\CampaignManagement;

/**
 * Adds one or more campaign criterions that help determine whether ads in each campaign get served.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913127(v=msads.90).aspx AddCampaignCriterions Response Object
 * 
 * @uses BatchErrorCollection
 * @used-by BingAdsCampaignManagementService::AddCampaignCriterions
 */
final class AddCampaignCriterionsResponse
{
    /**
     * A list of identifiers that identify the criterion that were added.
     *
     * @var int[]
     */
    public $CampaignCriterionIds;
    /**
     * An array of BatchErrorCollection objects that contain details for any conditions that were not successfully added for the criterion.
     *
     * @var BatchErrorCollection[]
     */
    public $NestedPartialErrors;
}
