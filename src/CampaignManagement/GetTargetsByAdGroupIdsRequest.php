<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves detailed information about the targets that are associated with the specified ad groups.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236297(v=msads.90).aspx GetTargetsByAdGroupIds Request Object
 * 
 * @used-by BingAdsCampaignManagementService::GetTargetsByAdGroupIds
 */
final class GetTargetsByAdGroupIdsRequest
{
    /**
     * A list of identifiers of the ad groups that contain the targets that you want to get.
     *
     * @var int[]
     */
    public $AdGroupIds;
    /**
     * The version of the location codes to return if the target contains location targets.
     *
     * @var string
     */
    public $LocationTargetVersion;
}
