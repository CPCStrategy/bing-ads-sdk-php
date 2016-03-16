<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Defines the monetary bid to use in the auction.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj689541(v=msads.100).aspx FixedBid Data Object
 * 
 * @uses Bid
 */
final class FixedBid extends CriterionBid
{
    /**
     * The amount to bid in the auction.
     *
     * @var Bid
     */
    public $Bid;
}
