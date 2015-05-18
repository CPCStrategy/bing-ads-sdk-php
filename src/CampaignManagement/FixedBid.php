<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the monetary bid to use in the auction.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj689541(v=msads.90).aspx FixedBid Data Object
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
