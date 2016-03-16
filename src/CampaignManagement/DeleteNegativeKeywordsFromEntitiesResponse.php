<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes negative keywords from the specified campaign or ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743725(v=msads.90).aspx DeleteNegativeKeywordsFromEntities Response Object
 * 
 * @uses BatchErrorCollection
 * @used-by BingAdsCampaignManagementService::DeleteNegativeKeywordsFromEntities
 */
final class DeleteNegativeKeywordsFromEntitiesResponse
{
    /**
     * An array of BatchErrorCollection objects that contain details for any negative keywords that were not successfully deleted from the corresponding entity.
     *
     * @var BatchErrorCollection[]
     */
    public $NestedPartialErrors;
}
