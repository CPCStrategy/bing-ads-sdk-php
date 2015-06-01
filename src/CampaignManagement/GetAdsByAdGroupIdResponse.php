<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves the ads that are associated with an ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277534(v=msads.90).aspx GetAdsByAdGroupId Response Object
 *
 * @uses Ad
 * @used-by BingAdsCampaignManagementService::GetAdsByAdGroupId
 */
final class GetAdsByAdGroupIdResponse
{
    /**
     * An array of Ad objects that represents the ads that have been retrieved.
     *
     * @var Ad[]
     */
    public $Ads;
}
