<?php

namespace BingAds\CampaignManagement;

/**
 * Reserved for future use.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743763(v=msads.90).aspx NetworkTarget Data Object
 * 
 * @uses NetworkTargetBid
 * @used-by Target2
 */
final class NetworkTarget
{
    /**
     * An array of NetworkTargetBid objects that each specify the network to target with bid adjustment to apply to the base bid.
     *
     * @var NetworkTargetBid[]
     */
    public $Bids;
}
