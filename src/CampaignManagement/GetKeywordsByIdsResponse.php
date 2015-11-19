<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves the specified keywords.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277505(v=msads.100).aspx GetKeywordsByIds Response Object
 * 
 * @uses Keyword
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::GetKeywordsByIds
 */
final class GetKeywordsByIdsResponse
{
    public $Keywords;
    public $PartialErrors;
}
