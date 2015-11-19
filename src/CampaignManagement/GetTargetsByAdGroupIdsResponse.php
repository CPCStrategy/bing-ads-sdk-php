<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves detailed information about the targets that are associated with the specified ad groups.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236297(v=msads.100).aspx GetTargetsByAdGroupIds Response Object
 * 
 * @uses BatchError
 * @uses Target
 * @used-by BingAdsCampaignManagementService::GetTargetsByAdGroupIds
 */
final class GetTargetsByAdGroupIdsResponse
{
    public $PartialErrors;
    public $Targets;
}
