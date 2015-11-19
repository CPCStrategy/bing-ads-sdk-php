<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves detailed information about the targets that are associated with the specified campaigns.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236300(v=msads.90).aspx GetTargetsByCampaignIds Response Object
 *
 * @uses Target
 * @used-by BingAdsCampaignManagementService::GetTargetsByCampaignIds
 */
final class GetTargetsByCampaignIdsResponse
{
    /**
     * An array of Target objects that corresponds directly to the list of campaign identifiers in the request.
     *
     * @var Target[]
     */
    public $Targets;
}
