<?php

namespace BingAds\CampaignManagement;

/**
 * Adds one or more website placement bids to an ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277523(v=msads.100).aspx AddSitePlacements Request Object
 * 
 * @uses SitePlacement
 * @used-by BingAdsCampaignManagementService::AddSitePlacements
 */
final class AddSitePlacementsRequest
{
    public $AdGroupId;
    public $SitePlacements;
}
