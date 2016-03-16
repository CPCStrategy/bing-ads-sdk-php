<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves detailed information about the Target2 objects that are associated with the specified ad groups.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743776(v=msads.90).aspx GetTargetsByAdGroupIds2 Response Object
 * 
 * @uses Target2
 * @used-by BingAdsCampaignManagementService::GetTargetsByAdGroupIds2
 */
final class GetTargetsByAdGroupIds2Response
{
    /**
     * An array of Target2 objects that corresponds directly to the list of ad group identifiers in the request.
     *
     * @var Target2[]
     */
    public $Targets;
}
