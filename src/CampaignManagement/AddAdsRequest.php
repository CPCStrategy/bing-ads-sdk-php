<?php

namespace BingAds\CampaignManagement;

/**
 * Adds one or more ads to an ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277506(v=msads.90).aspx AddAds Request Object
 *
 * @uses Ad
 * @used-by BingAdsCampaignManagementService::AddAds
 */
final class AddAdsRequest
{
    /**
     * The identifier of the ad group to add the ads to.
     *
     * @var int
     */
    public $AdGroupId;
    /**
     * An array of ads to add to the specified ad group.
     *
     * @var Ad[]
     */
    public $Ads;
}
