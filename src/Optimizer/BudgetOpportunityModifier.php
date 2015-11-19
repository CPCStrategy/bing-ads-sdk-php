<?php

namespace BingAds\Optimizer;

/**
 * Defines a budget opportunity modifier object.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn766189(v=msads.90).aspx BudgetOpportunityModifier Data Object
 */
final class BudgetOpportunityModifier extends OpportunityModifier
{
    /**
     * The new budget amount that you want to apply instead of the suggested opportunity.
     *
     * @var float
     */
    public $Budget;
}
