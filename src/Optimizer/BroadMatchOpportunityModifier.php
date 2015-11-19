<?php

namespace BingAds\Optimizer;

/**
 * Defines a broad match opportunity modifier object.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn766192(v=msads.90).aspx BroadMatchOpportunityModifier Data Object
 */
final class BroadMatchOpportunityModifier extends OpportunityModifier
{
    /**
     * The new bid amount that you want to apply instead of the suggested opportunity.
     *
     * @var float
     */
    public $Bid;
}
