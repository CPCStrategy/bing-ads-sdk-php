<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes one or more ads in a specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236310(v=msads.90).aspx DeleteAds Request Object
 *
 * @used-by BingAdsCampaignManagementService::DeleteAds
 */
final class DeleteAdsRequest
{
    /**
     * The ID of the ad group that contains the ads to delete.
     *
     * @var int
     */
    public $AdGroupId;
    /**
     * The IDs of the ads to delete.
     *
     * @var integer[]
     */
    public $AdIds;
}
