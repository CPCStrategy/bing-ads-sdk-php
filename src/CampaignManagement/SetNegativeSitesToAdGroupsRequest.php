<?php

namespace BingAds\CampaignManagement;

/**
 * Sets the negative site URLs of the specified ad groups.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236317(v=msads.90).aspx SetNegativeSitesToAdGroups Request Object
 * 
 * @uses AdGroupNegativeSites
 * @used-by BingAdsCampaignManagementService::SetNegativeSitesToAdGroups
 */
final class SetNegativeSitesToAdGroupsRequest
{
    /**
     * The identifier of the campaign that contains the ad groups.
     *
     * @var int
     */
    public $CampaignId;
    /**
     * An array of AdGroupNegativeSites objects that identify the ad groups to update with the specified negative site URLs.
     *
     * @var AdGroupNegativeSites[]
     */
    public $AdGroupNegativeSites;
}
