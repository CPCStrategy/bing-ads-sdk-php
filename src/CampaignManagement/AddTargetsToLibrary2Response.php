<?php

namespace BingAds\CampaignManagement;

/**
 * Adds the specified Target2 to your target library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743775(v=msads.90).aspx AddTargetsToLibrary2 Response Object
 * 
 * @used-by BingAdsCampaignManagementService::AddTargetsToLibrary2
 */
final class AddTargetsToLibrary2Response
{
    /**
     * An array of long values that contains the identifiers of the targets that were added to your target library.
     *
     * @var int[]
     */
    public $TargetIds;
}
