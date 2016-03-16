<?php

namespace BingAds\CampaignManagement;

/**
 * Reserved for future use.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743764(v=msads.90).aspx NetworkTargetBid Data Object
 * 
 * @uses NetworkType
 * @used-by NetworkTarget
 */
final class NetworkTargetBid
{
    /**
     * The percent amount by which to adjust the base bid for the specified network.
     *
     * @var int
     */
    public $BidAdjustment;
    /**
     * The network to target.
     *
     * @var NetworkType
     */
    public $Network;
}
