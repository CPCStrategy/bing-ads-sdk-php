<?php

namespace BingAds\CampaignManagement;

/**
 * Updates the specified ads within a particular ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277531(v=msads.90).aspx UpdateAds Response Object
 * 
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::UpdateAds
 */
final class UpdateAdsResponse
{
    /**
     * An array of BatchError objects that contain details for any ads that were not successfully updated.
     *
     * @var BatchError[]
     */
    public $PartialErrors;
}
