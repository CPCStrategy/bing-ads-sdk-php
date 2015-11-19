<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves detailed information about the targets that are associated with the specified campaigns.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236300(v=msads.100).aspx GetTargetsByCampaignIds Response Object
 * 
 * @uses BatchError
 * @uses Target
 * @used-by BingAdsCampaignManagementService::GetTargetsByCampaignIds
 */
final class GetTargetsByCampaignIdsResponse
{
    public $PartialErrors;
    public $Targets;
}
