<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves placement information for the specified URLs.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277530(v=msads.90).aspx GetPlacementDetailsForUrls Response Object
 * 
 * @uses PlacementDetail
 * @used-by BingAdsCampaignManagementService::GetPlacementDetailsForUrls
 */
final class GetPlacementDetailsForUrlsResponse
{
    /**
     * A two-dimensional array of PlacementDetail objects that contains the identifier of the publisher website and the types and sizes of media that the publisher supports.
     *
     * @var PlacementDetail[][]
     */
    public $PlacementDetails;
}
