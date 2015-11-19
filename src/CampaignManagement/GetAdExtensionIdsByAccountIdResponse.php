<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the ad extensions from the account's ad extension library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277509(v=msads.100).aspx GetAdExtensionIdsByAccountId Response Object
 * 
 * @used-by BingAdsCampaignManagementService::GetAdExtensionIdsByAccountId
 */
final class GetAdExtensionIdsByAccountIdResponse
{
    public $AdExtensionIds;
}
