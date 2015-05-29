<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves detailed information about the specified Target2 objects.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743779(v=msads.90).aspx GetTargetsByIds2 Response Object
 *
 * @uses Target2
 * @used-by BingAdsCampaignManagementService::GetTargetsByIds2
 */
final class GetTargetsByIds2Response
{
    /**
     * An array of Target2 objects that contains information about the specified targets.
     *
     * @var Target2[]
     */
    public $Targets;
}
