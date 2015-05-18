<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves all the website-placement bids from the specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277535(v=msads.90).aspx GetSitePlacementsByAdGroupId Response Object
 *
 * @uses SitePlacement
 * @used-by BingAdsCampaignManagementService::GetSitePlacementsByAdGroupId
 */
final class GetSitePlacementsByAdGroupIdResponse
{
    /**
     * An array of SitePlacement objects that was successfully retrieved.
     *
     * @var SitePlacement[]
     */
    public $SitePlacements;
}
