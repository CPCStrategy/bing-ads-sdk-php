<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves the specified campaigns from the specified account.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236303(v=msads.90).aspx GetCampaignsByIds Response Object
 * 
 * @uses Campaign
 * @used-by BingAdsCampaignManagementService::GetCampaignsByIds
 */
final class GetCampaignsByIdsResponse
{
    /**
     * An array of Campaign objects that corresponds directly to the campaign identifiers that you specified in the request.
     *
     * @var Campaign[]
     */
    public $Campaigns;
}
