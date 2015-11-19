<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes negative keywords from the specified campaign or ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743725(v=msads.100).aspx DeleteNegativeKeywordsFromEntities Request Object
 * 
 * @uses EntityNegativeKeyword
 * @used-by BingAdsCampaignManagementService::DeleteNegativeKeywordsFromEntities
 */
final class DeleteNegativeKeywordsFromEntitiesRequest
{
    public $EntityNegativeKeywords;
}
