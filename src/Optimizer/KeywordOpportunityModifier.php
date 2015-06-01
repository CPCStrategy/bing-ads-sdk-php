<?php

namespace BingAds\Optimizer;

/**
 * Defines a keyword opportunity modifier object.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn766191(v=msads.90).aspx KeywordOpportunityModifier Data Object
 */
final class KeywordOpportunityModifier extends OpportunityModifier
{
    /**
     * The identifier of the ad group that you want to apply the opportunity instead of the ad group suggested by the original opportunity.
     *
     * @var int
     */
    public $AdGroupId;
}
