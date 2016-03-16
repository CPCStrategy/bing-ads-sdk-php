<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes one or more keywords in a specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236318(v=msads.90).aspx DeleteKeywords Request Object
 * 
 * @used-by BingAdsCampaignManagementService::DeleteKeywords
 */
final class DeleteKeywordsRequest
{
    /**
     * The identifier of the ad group that contains the keywords to delete.
     *
     * @var int
     */
    public $AdGroupId;
    /**
     * A maximum of 1,000 keywords identifiers to delete.
     *
     * @var int[]
     */
    public $KeywordIds;
}
