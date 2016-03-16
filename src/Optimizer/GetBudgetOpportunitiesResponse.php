<?php

namespace BingAds\Optimizer;

/**
 * Gets the campaign budget opportunities of the specified account.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn376335(v=msads.90).aspx GetBudgetOpportunities Response Object
 * 
 * @uses BudgetOpportunity
 * @used-by BingAdsOptimizerService::GetBudgetOpportunities
 */
final class GetBudgetOpportunitiesResponse
{
    /**
     * An array of BudgetOpportunity objects that identify the campaigns whose clicks and impressions may increase if you were to apply the suggested budget.
     *
     * @var BudgetOpportunity[]
     */
    public $Opportunities;
}
