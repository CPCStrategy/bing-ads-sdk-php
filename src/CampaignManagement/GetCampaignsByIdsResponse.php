<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves the specified campaigns from the specified account.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236303(v=msads.100).aspx GetCampaignsByIds Response Object
 * 
 * @uses Campaign
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::GetCampaignsByIds
 */
final class GetCampaignsByIdsResponse
{
    public $Campaigns;
    public $PartialErrors;
}
