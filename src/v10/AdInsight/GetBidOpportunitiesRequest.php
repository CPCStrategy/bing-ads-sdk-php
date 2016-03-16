<?php

namespace BingAds\v10\AdInsight;

/**
 * Gets the keyword bid opportunities of the specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219287(v=msads.100).aspx GetBidOpportunities Request Object
 * 
 * @uses BidOpportunityType
 * @used-by BingAdsAdInsightService::GetBidOpportunities
 */
final class GetBidOpportunitiesRequest
{
    public $AdGroupId;
    public $CampaignId;
    public $OpportunityType;
}
