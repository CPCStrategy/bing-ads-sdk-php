<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Defines a bid.
 *
 * @link http://msdn.microsoft.com/en-us/library/dd797130(v=msads.100).aspx Bid Data Object
 * 
 * @used-by AdGroup
 * @used-by FixedBid
 * @used-by Keyword
 * @used-by SitePlacement
 */
final class Bid
{
    /**
     * The bid value.
     *
     * @var float
     */
    public $Amount;
}
