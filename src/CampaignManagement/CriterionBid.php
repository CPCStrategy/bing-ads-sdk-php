<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a base class for criterion bids.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj689540(v=msads.90).aspx CriterionBid Data Object
 * 
 * @used-by BiddableAdGroupCriterion
 */
class CriterionBid
{
    /**
     * The type of criterion bid.
     *
     * @var string
     */
    public $Type;
}
