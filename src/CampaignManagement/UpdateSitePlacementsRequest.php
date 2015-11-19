<?php

namespace BingAds\CampaignManagement;

/**
 * Updates one or more website-placement bids in an ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236298(v=msads.90).aspx UpdateSitePlacements Request Object
 *
 * @uses SitePlacement
 * @used-by BingAdsCampaignManagementService::UpdateSitePlacements
 */
final class UpdateSitePlacementsRequest
{
    /**
     * The identifier of the ad group that the placement bids to be updated belong to.
     *
     * @var int
     */
    public $AdGroupId;
    /**
     * An array of SitePlacement objects that contains the updated website placement bid information.
     *
     * @var SitePlacement[]
     */
    public $SitePlacements;
}
