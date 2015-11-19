<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes one or more campaigns in a specified account.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236314(v=msads.100).aspx DeleteCampaigns Response Object
 * 
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::DeleteCampaigns
 */
final class DeleteCampaignsResponse
{
    public $PartialErrors;
}
