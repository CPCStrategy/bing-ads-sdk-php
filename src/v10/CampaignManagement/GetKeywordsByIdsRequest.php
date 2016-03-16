<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Retrieves the specified keywords.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277505(v=msads.100).aspx GetKeywordsByIds Request Object
 * 
 * @used-by BingAdsCampaignManagementService::GetKeywordsByIds
 */
final class GetKeywordsByIdsRequest
{
    public $AdGroupId;
    public $KeywordIds;
}
