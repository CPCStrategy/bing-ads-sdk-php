<?php

namespace BingAds\CampaignManagement;

/**
 * Adds targets to your target library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277526(v=msads.90).aspx AddTargetsToLibrary Response Object
 * 
 * @used-by BingAdsCampaignManagementService::AddTargetsToLibrary
 */
final class AddTargetsToLibraryResponse
{
    /**
     * An array of long values that contains the identifiers of the targets that were added to your target library.
     *
     * @var int[]
     */
    public $TargetIds;
}
