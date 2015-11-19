<?php

namespace BingAds\AdInsight;

/**
 * This is the base class from which opportunity objects derive.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219304(v=msads.100).aspx Opportunity Data Object
 */
class Opportunity
{
    /**
     * An identifier that uniquely identifies the opportunity.
     *
     * @var string
     */
    public $OpportunityKey;
}
