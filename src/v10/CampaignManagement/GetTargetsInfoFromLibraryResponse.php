<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Retrieves detailed information about all the targets in your target library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236308(v=msads.100).aspx GetTargetsInfoFromLibrary Response Object
 * 
 * @uses TargetInfo
 * @used-by BingAdsCampaignManagementService::GetTargetsInfoFromLibrary
 */
final class GetTargetsInfoFromLibraryResponse
{
    public $TargetsInfo;
}
