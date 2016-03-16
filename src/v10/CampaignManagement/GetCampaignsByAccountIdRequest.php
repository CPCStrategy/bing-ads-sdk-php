<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Retrieves all the campaigns that exist within a specified account.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236299(v=msads.100).aspx GetCampaignsByAccountId Request Object
 * 
 * @uses CampaignType
 * @used-by BingAdsCampaignManagementService::GetCampaignsByAccountId
 */
final class GetCampaignsByAccountIdRequest
{
    public $AccountId;
    public $CampaignType;
}
