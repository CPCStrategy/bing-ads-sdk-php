<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves detailed information about the specified targets.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236304(v=msads.90).aspx GetTargetsByIds Request Object
 *
 * @used-by BingAdsCampaignManagementService::GetTargetsByIds
 */
final class GetTargetsByIdsRequest
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
