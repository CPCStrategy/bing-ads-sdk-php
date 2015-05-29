<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves detailed information about the targets that are associated with the specified campaigns.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236300(v=msads.90).aspx GetTargetsByCampaignIds Request Object
 *
 * @used-by BingAdsCampaignManagementService::GetTargetsByCampaignIds
 */
final class GetTargetsByCampaignIdsRequest
{
    /**
     * A list of identifiers of the campaigns that contain the targets that you want to get.
     *
     * @var integer[]
     */
    public $CampaignIds;
    /**
     * The version of the location codes to return if the target contains location targets.
     *
     * @var string
     */
    public $LocationTargetVersion;
}
