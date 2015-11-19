<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves detailed information about the specified Target2 objects.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743779(v=msads.90).aspx GetTargetsByIds2 Request Object
 *
 * @used-by BingAdsCampaignManagementService::GetTargetsByIds2
 */
final class GetTargetsByIds2Request
{
    /**
     * A list of identifiers of the targets to get.
     *
     * @var integer[]
     */
    public $TargetIds;
    /**
     * The version of the location codes to return if the target contains location targets.
     *
     * @var string
     */
    public $LocationTargetVersion;
}
