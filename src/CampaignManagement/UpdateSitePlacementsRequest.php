<?php

namespace BingAds\CampaignManagement;

/**
 * Updates one or more website-placement bids in an ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236298(v=msads.100).aspx UpdateSitePlacements Request Object
 * 
 * @uses SitePlacement
 * @used-by BingAdsCampaignManagementService::UpdateSitePlacements
 */
final class UpdateSitePlacementsRequest
{
    public $AdGroupId;
    public $SitePlacements;
}
