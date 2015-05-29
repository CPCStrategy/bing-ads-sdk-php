<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves the negative keywords that are only associated to the specified campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277519(v=msads.90).aspx GetNegativeKeywordsByCampaignIds Response Object
 *
 * @uses CampaignNegativeKeywords
 * @used-by BingAdsCampaignManagementService::GetNegativeKeywordsByCampaignIds
 */
final class GetNegativeKeywordsByCampaignIdsResponse
{
    /**
     * An array of CampaignNegativeKeywords objects that contains the negative keywords of the specified campaigns.
     *
     * @var CampaignNegativeKeywords[]
     */
    public $CampaignNegativeKeywords;
}
