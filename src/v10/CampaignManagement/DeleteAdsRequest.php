<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Deletes one or more ads in a specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236310(v=msads.100).aspx DeleteAds Request Object
 * 
 * @used-by BingAdsCampaignManagementService::DeleteAds
 */
final class DeleteAdsRequest
{
    public $AdGroupId;
    public $AdIds;
}
