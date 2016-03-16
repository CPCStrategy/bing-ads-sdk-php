<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Retrieves the keywords with the specified editorial review status.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277501(v=msads.100).aspx GetKeywordsByEditorialStatus Response Object
 * 
 * @uses Keyword
 * @used-by BingAdsCampaignManagementService::GetKeywordsByEditorialStatus
 */
final class GetKeywordsByEditorialStatusResponse
{
    public $Keywords;
}
