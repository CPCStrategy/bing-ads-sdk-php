<?php

namespace BingAds\CampaignManagement;

/**
 * Adds one or more ads to an ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277506(v=msads.90).aspx AddAds Response Object
 *
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::AddAds
 */
final class AddAdsResponse
{
    /**
     * A list of long values that represents the identifiers for the ads that were added.
     *
     * @var integer[]
     */
    public $AdIds;
    /**
     * An array of BatchError objects that contain details for any ads that were not successfully added.
     *
     * @var BatchError[]
     */
    public $PartialErrors;
}
