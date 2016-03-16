<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Retrieves detailed information about the targets that are associated with the specified ad groups.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236297(v=msads.100).aspx GetTargetsByAdGroupIds Request Object
 * 
 * @used-by BingAdsCampaignManagementService::GetTargetsByAdGroupIds
 */
final class GetTargetsByAdGroupIdsRequest
{
    public $AdGroupIds;
}
