<?php

namespace BingAds\v10\AdInsight;

/**
 * Gets the keyword bid opportunities of the specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219287(v=msads.100).aspx GetBidOpportunities Response Object
 * 
 * @uses BidOpportunity
 * @used-by BingAdsAdInsightService::GetBidOpportunities
 */
final class GetBidOpportunitiesResponse
{
    public $Opportunities;
}
