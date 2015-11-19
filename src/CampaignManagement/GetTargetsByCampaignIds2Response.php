<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves detailed information about the Target2 objects that are associated with the specified campaigns.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743778(v=msads.90).aspx GetTargetsByCampaignIds2 Response Object
 * 
 * @uses Target2
 * @used-by BingAdsCampaignManagementService::GetTargetsByCampaignIds2
 */
final class GetTargetsByCampaignIds2Response
{
    /**
     * An array of Target2 objects that corresponds directly to the list of campaign identifiers in the request.
     *
     * @var Target2[]
     */
    public $Targets;
}
