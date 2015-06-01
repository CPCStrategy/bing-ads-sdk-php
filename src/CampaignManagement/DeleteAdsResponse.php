<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes one or more ads in a specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236310(v=msads.90).aspx DeleteAds Response Object
 *
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::DeleteAds
 */
final class DeleteAdsResponse
{
    /**
     * An array of BatchError objects that contain details for any ads that were not successfully deleted.
     *
     * @var BatchError[]
     */
    public $PartialErrors;
}
