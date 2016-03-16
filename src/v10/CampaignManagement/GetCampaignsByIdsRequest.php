<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Retrieves the specified campaigns from the specified account.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236303(v=msads.100).aspx GetCampaignsByIds Request Object
 * 
 * @uses CampaignType
 * @used-by BingAdsCampaignManagementService::GetCampaignsByIds
 */
final class GetCampaignsByIdsRequest
{
    public $AccountId;
    public $CampaignIds;
    public $CampaignType;
}
