<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Retrieves placement information for the specified URLs.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277530(v=msads.100).aspx GetPlacementDetailsForUrls Response Object
 * 
 * @uses PlacementDetail
 * @used-by BingAdsCampaignManagementService::GetPlacementDetailsForUrls
 */
final class GetPlacementDetailsForUrlsResponse
{
    public $PlacementDetails;
}
