<?php

namespace BingAds\Optimizer;

/**
 * This is the base class from which opportunity objects derive.
 *
 * @link http://msdn.microsoft.com/en-us/library/hh418063(v=msads.90).aspx Opportunity Data Object
 */
class Opportunity
{
    /**
     * The date by when the suggested opportunity expires.
     *
     * @var \DateTime
     */
    public $ExpirationDate;
    /**
     * An identifier that uniquely identifies the opportunity.
     *
     * @var string
     */
    public $OpportunityKey;
}
