<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Deletes one or more keywords in a specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236318(v=msads.100).aspx DeleteKeywords Request Object
 * 
 * @used-by BingAdsCampaignManagementService::DeleteKeywords
 */
final class DeleteKeywordsRequest
{
    public $AdGroupId;
    public $KeywordIds;
}
