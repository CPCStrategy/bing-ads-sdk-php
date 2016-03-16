<?php

namespace BingAds\CampaignManagement;

/**
 * Adds negative keywords to the specified campaign or ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743724(v=msads.90).aspx AddNegativeKeywordsToEntities Request Object
 * 
 * @uses EntityNegativeKeyword
 * @used-by BingAdsCampaignManagementService::AddNegativeKeywordsToEntities
 */
final class AddNegativeKeywordsToEntitiesRequest
{
    /**
     * An array of negative keyword with associated entity such as a campaign or ad group.
     *
     * @var EntityNegativeKeyword[]
     */
    public $EntityNegativeKeywords;
}
