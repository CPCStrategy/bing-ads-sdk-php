<?php

namespace BingAds\CampaignManagement;

/**
 * Sets the negative keywords of the specified ad groups.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236312(v=msads.90).aspx SetNegativeKeywordsToAdGroups Request Object
 *
 * @uses AdGroupNegativeKeywords
 * @used-by BingAdsCampaignManagementService::SetNegativeKeywordsToAdGroups
 */
final class SetNegativeKeywordsToAdGroupsRequest
{
    /**
     * The identifier of the campaign that contains the ad groups.
     *
     * @var int
     */
    public $CampaignId;
    /**
     * An array of AdGroupNegativeKeywords objects that identify the ad groups to update with the specified negative keywords.
     *
     * @var AdGroupNegativeKeywords[]
     */
    public $AdGroupNegativeKeywords;
}
