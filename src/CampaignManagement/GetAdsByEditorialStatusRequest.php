<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves the ads that belong to the specified ad group and have the specified editorial review status.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277538(v=msads.100).aspx GetAdsByEditorialStatus Request Object
 * 
 * @uses AdEditorialStatus
 * @used-by BingAdsCampaignManagementService::GetAdsByEditorialStatus
 */
final class GetAdsByEditorialStatusRequest
{
    public $AdGroupId;
    public $EditorialStatus;
}
