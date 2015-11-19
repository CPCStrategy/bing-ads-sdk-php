<?php

namespace BingAds\CampaignManagement;

/**
 * Adds the specified Target2 to your target library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743775(v=msads.90).aspx AddTargetsToLibrary2 Request Object
 * 
 * @uses Target2
 * @used-by BingAdsCampaignManagementService::AddTargetsToLibrary2
 */
final class AddTargetsToLibrary2Request
{
    /**
     * An array of Target2 objects to add to the target library.
     *
     * @var Target2[]
     */
    public $Targets;
}
