<?php

namespace BingAds\CampaignManagement;

/**
 * Adds one or more ads to an ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277506(v=msads.100).aspx AddAds Request Object
 * 
 * @uses Ad
 * @used-by BingAdsCampaignManagementService::AddAds
 */
final class AddAdsRequest
{
    public $AdGroupId;
    public $Ads;
}
