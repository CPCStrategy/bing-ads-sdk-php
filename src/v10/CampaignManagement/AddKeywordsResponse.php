<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Adds one or more keywords to an ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277513(v=msads.100).aspx AddKeywords Response Object
 * 
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::AddKeywords
 */
final class AddKeywordsResponse
{
    public $KeywordIds;
    public $PartialErrors;
}
