<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes one or more campaign criterions.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913125(v=msads.90).aspx DeleteCampaignCriterions Response Object
 * 
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::DeleteCampaignCriterions
 */
final class DeleteCampaignCriterionsResponse
{
    /**
     * An array of BatchError objects that contain details for any list items that were not successfully deleted.
     *
     * @var BatchError[]
     */
    public $PartialErrors;
}
