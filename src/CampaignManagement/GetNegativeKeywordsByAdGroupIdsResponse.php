<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves the negative keywords that are only associated to the specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277514(v=msads.90).aspx GetNegativeKeywordsByAdGroupIds Response Object
 *
 * @uses AdGroupNegativeKeywords
 * @used-by BingAdsCampaignManagementService::GetNegativeKeywordsByAdGroupIds
 */
final class GetNegativeKeywordsByAdGroupIdsResponse
{
    /**
     * An array of AdGroupNegativeKeywords objects that contains the negative keywords of the specified ad groups.
     *
     * @var AdGroupNegativeKeywords[]
     */
    public $AdGroupNegativeKeywords;
}
