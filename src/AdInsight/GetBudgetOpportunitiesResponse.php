<?php

namespace BingAds\AdInsight;

/**
 * Gets the campaign budget opportunities of the specified campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219289(v=msads.100).aspx GetBudgetOpportunities Response Object
 * 
 * @uses BudgetOpportunity
 * @used-by BingAdsAdInsightService::GetBudgetOpportunities
 */
final class GetBudgetOpportunitiesResponse
{
    public $Opportunities;
}
