<?php

namespace BingAds\Optimizer;

/**
 * Defines an object that contains the key used to identify the opportunity to be applied.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn766182(v=msads.90).aspx OpportunityModifier Data Object
 *
 * @used-by ApplyOpportunitiesRequest
 * @used-by ApplyOpportunityModifiersRequest
 */
class OpportunityModifier
{
    /**
     * An identifier that uniquely identifies the opportunity to modify.
     *
     * @var string
     */
    public $OpportunityKey;
}
