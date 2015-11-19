<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves the specified ads from the specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236296(v=msads.100).aspx GetAdsByIds Request Object
 * 
 * @used-by BingAdsCampaignManagementService::GetAdsByIds
 */
final class GetAdsByIdsRequest
{
    public $AdGroupId;
    public $AdIds;
}
