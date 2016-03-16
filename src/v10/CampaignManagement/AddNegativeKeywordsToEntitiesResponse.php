<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Adds negative keywords to the specified campaign or ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743724(v=msads.100).aspx AddNegativeKeywordsToEntities Response Object
 * 
 * @uses IdCollection
 * @uses BatchErrorCollection
 * @used-by BingAdsCampaignManagementService::AddNegativeKeywordsToEntities
 */
final class AddNegativeKeywordsToEntitiesResponse
{
    public $NegativeKeywordIds;
    public $NestedPartialErrors;
}
