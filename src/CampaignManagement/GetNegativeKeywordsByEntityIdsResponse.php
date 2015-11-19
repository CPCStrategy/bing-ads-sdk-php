<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the negative keywords that are only associated with the specified campaigns or ad groups.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743730(v=msads.100).aspx GetNegativeKeywordsByEntityIds Response Object
 * 
 * @uses EntityNegativeKeyword
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::GetNegativeKeywordsByEntityIds
 */
final class GetNegativeKeywordsByEntityIdsResponse
{
    public $EntityNegativeKeywords;
    public $PartialErrors;
}
