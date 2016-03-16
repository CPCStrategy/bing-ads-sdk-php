<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves detailed information about the Target2 objects that are associated with the specified ad groups.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743776(v=msads.90).aspx GetTargetsByAdGroupIds2 Request Object
 * 
 * @used-by BingAdsCampaignManagementService::GetTargetsByAdGroupIds2
 */
final class GetTargetsByAdGroupIds2Request
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
