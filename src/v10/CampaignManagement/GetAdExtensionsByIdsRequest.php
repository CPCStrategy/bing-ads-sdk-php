<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Gets the specified ad extensions from the account's ad extension library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277515(v=msads.100).aspx GetAdExtensionsByIds Request Object
 * 
 * @uses AdExtensionsTypeFilter
 * @used-by BingAdsCampaignManagementService::GetAdExtensionsByIds
 */
final class GetAdExtensionsByIdsRequest
{
    public $AccountId;
    public $AdExtensionIds;
    public $AdExtensionType;
}
