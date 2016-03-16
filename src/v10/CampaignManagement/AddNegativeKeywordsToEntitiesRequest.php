<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Adds negative keywords to the specified campaign or ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743724(v=msads.100).aspx AddNegativeKeywordsToEntities Request Object
 * 
 * @uses EntityNegativeKeyword
 * @used-by BingAdsCampaignManagementService::AddNegativeKeywordsToEntities
 */
final class AddNegativeKeywordsToEntitiesRequest
{
    public $EntityNegativeKeywords;
}
