<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Retrieves the specified website-placement bids from the specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277539(v=msads.100).aspx GetSitePlacementsByIds Request Object
 * 
 * @used-by BingAdsCampaignManagementService::GetSitePlacementsByIds
 */
final class GetSitePlacementsByIdsRequest
{
    public $AdGroupId;
    public $SitePlacementIds;
}
