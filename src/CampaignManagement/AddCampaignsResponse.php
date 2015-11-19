<?php

namespace BingAds\CampaignManagement;

/**
 * Adds one or more campaigns to the specified account.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277510(v=msads.100).aspx AddCampaigns Response Object
 * 
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::AddCampaigns
 */
final class AddCampaignsResponse
{
    public $CampaignIds;
    public $PartialErrors;
}
