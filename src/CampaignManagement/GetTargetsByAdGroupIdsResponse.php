<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves detailed information about the targets that are associated with the specified ad groups.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236297(v=msads.90).aspx GetTargetsByAdGroupIds Response Object
 * 
 * @uses Target
 * @used-by BingAdsCampaignManagementService::GetTargetsByAdGroupIds
 */
final class GetTargetsByAdGroupIdsResponse
{
    /**
     * An array of Target objects that corresponds directly to the list of ad group identifiers in the request.
     *
     * @var Target[]
     */
    public $Targets;
}
