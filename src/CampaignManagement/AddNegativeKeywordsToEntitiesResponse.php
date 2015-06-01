<?php

namespace BingAds\CampaignManagement;

/**
 * Adds negative keywords to the specified campaign or ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743724(v=msads.90).aspx AddNegativeKeywordsToEntities Response Object
 *
 * @uses IdCollection
 * @uses BatchErrorCollection
 * @used-by BingAdsCampaignManagementService::AddNegativeKeywordsToEntities
 */
final class AddNegativeKeywordsToEntitiesResponse
{
    /**
     * An array of IdCollection objects identifying the negative keywords that were successfully added.
     *
     * @var IdCollection[]
     */
    public $NegativeKeywordIds;
    /**
     * An array of BatchErrorCollection objects that contain details for any negative keywords that were not successfully added to the corresponding entity.
     *
     * @var BatchErrorCollection[]
     */
    public $NestedPartialErrors;
}
