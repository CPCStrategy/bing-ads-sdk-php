<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves the ads that belong to the specified ad group and have the specified editorial review status.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277538(v=msads.90).aspx GetAdsByEditorialStatus Request Object
 * 
 * @uses AdEditorialStatus
 * @used-by BingAdsCampaignManagementService::GetAdsByEditorialStatus
 */
final class GetAdsByEditorialStatusRequest
{
    /**
     * The identifier of the ad group to retrieve the ads from.
     *
     * @var int
     */
    public $AdGroupId;
    /**
     * The AdEditorialStatus value that specifies the review status that the ads must have to be returned.
     *
     * @var AdEditorialStatus
     */
    public $EditorialStatus;
}
