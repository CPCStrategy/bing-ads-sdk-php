<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Retrieves the keywords for an ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236311(v=msads.100).aspx GetKeywordsByAdGroupId Request Object
 * 
 * @used-by BingAdsCampaignManagementService::GetKeywordsByAdGroupId
 */
final class GetKeywordsByAdGroupIdRequest
{
    public $AdGroupId;
}
