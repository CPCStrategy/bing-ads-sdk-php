<?php

namespace BingAds\CampaignManagement;

/**
 * Adds one or more website placement bids to an ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277523(v=msads.90).aspx AddSitePlacements Response Object
 *
 * @used-by BingAdsCampaignManagementService::AddSitePlacements
 */
final class AddSitePlacementsResponse
{
    /**
     * The identifiers of the website placement bids that were added.
     *
     * @var integer[]
     */
    public $SitePlacementIds;
}
