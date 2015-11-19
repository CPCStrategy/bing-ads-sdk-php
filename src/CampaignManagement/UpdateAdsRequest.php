<?php

namespace BingAds\CampaignManagement;

/**
 * Updates the specified ads within a particular ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277531(v=msads.100).aspx UpdateAds Request Object
 * 
 * @uses Ad
 * @used-by BingAdsCampaignManagementService::UpdateAds
 */
final class UpdateAdsRequest
{
    public $AdGroupId;
    public $Ads;
}
