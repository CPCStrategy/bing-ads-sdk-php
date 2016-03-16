<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Gets the negative keywords that are only associated with the specified campaigns or ad groups.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743730(v=msads.100).aspx GetNegativeKeywordsByEntityIds Request Object
 * 
 * @used-by BingAdsCampaignManagementService::GetNegativeKeywordsByEntityIds
 */
final class GetNegativeKeywordsByEntityIdsRequest
{
    public $EntityIds;
    public $EntityType;
    public $ParentEntityId;
}
