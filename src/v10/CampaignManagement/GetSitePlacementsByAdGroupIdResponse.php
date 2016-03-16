<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Retrieves all the website-placement bids from the specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277535(v=msads.100).aspx GetSitePlacementsByAdGroupId Response Object
 * 
 * @uses SitePlacement
 * @used-by BingAdsCampaignManagementService::GetSitePlacementsByAdGroupId
 */
final class GetSitePlacementsByAdGroupIdResponse
{
    public $SitePlacements;
}
