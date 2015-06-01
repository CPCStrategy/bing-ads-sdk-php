<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves the specified website-placement bids from the specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277539(v=msads.90).aspx GetSitePlacementsByIds Response Object
 *
 * @uses SitePlacement
 * @used-by BingAdsCampaignManagementService::GetSitePlacementsByIds
 */
final class GetSitePlacementsByIdsResponse
{
    /**
     * An array of SitePlacement objects that was successfully retrieved.
     *
     * @var SitePlacement[]
     */
    public $SitePlacements;
}
