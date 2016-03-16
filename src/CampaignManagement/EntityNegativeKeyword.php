<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that contains a set of negative keywords that are only associated with the corresponding entity such as a campaign or ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743733(v=msads.90).aspx EntityNegativeKeyword Data Object
 * 
 * @uses NegativeKeyword
 * @used-by AddNegativeKeywordsToEntitiesRequest
 * @used-by DeleteNegativeKeywordsFromEntitiesRequest
 * @used-by GetNegativeKeywordsByEntityIdsResponse
 */
final class EntityNegativeKeyword
{
    /**
     * The system-generated identifier of a campaign or ad group that is associated with the negative keywords.
     *
     * @var int
     */
    public $EntityId;
    /**
     * The type of entity such as a campaign that is associated with the negative keywords.
     *
     * @var string
     */
    public $EntityType;
    /**
     * An array of negative keywords that are associated with the corresponding campaign or ad group.
     *
     * @var NegativeKeyword[]
     */
    public $NegativeKeywords;
}
