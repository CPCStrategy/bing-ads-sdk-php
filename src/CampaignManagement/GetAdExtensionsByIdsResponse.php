<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the specified ad extensions from the account's ad extension library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277515(v=msads.100).aspx GetAdExtensionsByIds Response Object
 * 
 * @uses AdExtension
 * @used-by BingAdsCampaignManagementService::GetAdExtensionsByIds
 */
final class GetAdExtensionsByIdsResponse
{
    public $AdExtensions;
}
