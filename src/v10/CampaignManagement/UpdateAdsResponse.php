<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Updates the specified ads within a particular ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277531(v=msads.100).aspx UpdateAds Response Object
 * 
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::UpdateAds
 */
final class UpdateAdsResponse
{
    public $PartialErrors;
}
