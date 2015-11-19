<?php

namespace BingAds\Optimizer;

/**
 * Applies the recommended opportunities that the get opportunities operations returned, for example the OpportunityKeys returned by the GetBidOpportunities operation.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn376334(v=msads.90).aspx ApplyOpportunities Request Object
 * 
 * @uses OpportunityModifier
 * @used-by BingAdsOptimizerService::ApplyOpportunities
 */
final class ApplyOpportunitiesRequest
{
    /**
     * The identifier of the account that owns the entities to apply the opportunities to.
     *
     * @var int
     */
    public $AccountId;
    /**
     * The list of opportunity objects identifying the opportunities that you want to apply.
     *
     * @var string[]
     */
    public $OpportunityKeys;
    /**
     * An array of modifiers that overrides the available opportunity keys.
     *
     * @var OpportunityModifier[]
     */
    public $OpportunityModifiers;
}
