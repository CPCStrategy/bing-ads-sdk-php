<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Gets the ad extensions from the account's ad extension library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277509(v=msads.100).aspx GetAdExtensionIdsByAccountId Request Object
 * 
 * @uses AdExtensionsTypeFilter
 * @uses AssociationType
 * @used-by BingAdsCampaignManagementService::GetAdExtensionIdsByAccountId
 */
final class GetAdExtensionIdsByAccountIdRequest
{
    public $AccountId;
    public $AdExtensionType;
    public $AssociationType;
}
