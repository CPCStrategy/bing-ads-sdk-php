<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves detailed information about the specified targets.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236304(v=msads.100).aspx GetTargetsByIds Request Object
 * 
 * @used-by BingAdsCampaignManagementService::GetTargetsByIds
 */
final class GetTargetsByIdsRequest
{
    public $TargetIds;
}
