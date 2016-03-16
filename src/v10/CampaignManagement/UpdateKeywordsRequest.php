<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Updates the keywords within a specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236295(v=msads.100).aspx UpdateKeywords Request Object
 * 
 * @uses Keyword
 * @used-by BingAdsCampaignManagementService::UpdateKeywords
 */
final class UpdateKeywordsRequest
{
    public $AdGroupId;
    public $Keywords;
}
