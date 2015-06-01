<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves the specified ads from the specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236296(v=msads.90).aspx GetAdsByIds Response Object
 *
 * @uses Ad
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::GetAdsByIds
 */
final class GetAdsByIdsResponse
{
    /**
     * An array of Ad objects that corresponds directly to the ad identifiers that you specified in the request.
     *
     * @var Ad[]
     */
    public $Ads;
    /**
     * An array of BatchError objects that contain details for any ads that were not successfully retrieved.
     *
     * @var BatchError[]
     */
    public $PartialErrors;
}
