<?php

namespace BingAds\CampaignManagement;

/**
 * Updates Target2 objects in your target library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743774(v=msads.90).aspx UpdateTargetsInLibrary2 Request Object
 * 
 * @uses Target2
 * @used-by BingAdsCampaignManagementService::UpdateTargetsInLibrary2
 */
final class UpdateTargetsInLibrary2Request
{
    /**
     * An array of Target2 objects that contains the updated target information.
     *
     * @var Target2[]
     */
    public $Targets;
}
