<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes one or more campaign criterions.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913125(v=msads.100).aspx DeleteCampaignCriterions Response Object
 * 
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::DeleteCampaignCriterions
 */
final class DeleteCampaignCriterionsResponse
{
    public $PartialErrors;
}
