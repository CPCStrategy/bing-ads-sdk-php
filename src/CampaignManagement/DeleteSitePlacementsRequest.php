<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes one or more website-placement bids from an ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236315(v=msads.100).aspx DeleteSitePlacements Request Object
 * 
 * @used-by BingAdsCampaignManagementService::DeleteSitePlacements
 */
final class DeleteSitePlacementsRequest
{
    public $AdGroupId;
    public $SitePlacementIds;
}
