<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves the specified ads from the specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236296(v=msads.100).aspx GetAdsByIds Response Object
 * 
 * @uses Ad
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::GetAdsByIds
 */
final class GetAdsByIdsResponse
{
    public $Ads;
    public $PartialErrors;
}
