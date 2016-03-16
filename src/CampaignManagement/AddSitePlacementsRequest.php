<?php

namespace BingAds\CampaignManagement;

/**
 * Adds one or more website placement bids to an ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277523(v=msads.90).aspx AddSitePlacements Request Object
 * 
 * @uses SitePlacement
 * @used-by BingAdsCampaignManagementService::AddSitePlacements
 */
final class AddSitePlacementsRequest
{
    /**
     * The identifier of the ad group to add the site placement bids to.
     *
     * @var int
     */
    public $AdGroupId;
    /**
     * An array of SitePlacement objects that contains the site placement bids to add.
     *
     * @var SitePlacement[]
     */
    public $SitePlacements;
}
