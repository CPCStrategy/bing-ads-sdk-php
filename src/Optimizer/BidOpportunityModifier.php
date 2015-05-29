<?php

namespace BingAds\Optimizer;

/**
 * Defines a bid opportunity modifier object.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn766190(v=msads.90).aspx BidOpportunityModifier Data Object
 */
final class BidOpportunityModifier extends OpportunityModifier
{
    /**
     * The new bid amount that you want to apply instead of the suggested opportunity.
     *
     * @var float
     */
    public $Bid;
}
