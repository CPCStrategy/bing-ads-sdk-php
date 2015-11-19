<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves all the website-placement bids from the specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277535(v=msads.90).aspx GetSitePlacementsByAdGroupId Request Object
 *
 * @used-by BingAdsCampaignManagementService::GetSitePlacementsByAdGroupId
 */
final class GetSitePlacementsByAdGroupIdRequest
{
    /**
     * The identifier of the ad group that contains the website placement bids that will be retrieved.
     *
     * @var int
     */
    public $AdGroupId;
}
