<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a list of metro area targets with bid adjustments.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671815(v=msads.90).aspx MetroAreaTarget Data Object
 * 
 * @uses MetroAreaTargetBid
 * @used-by LocationTarget
 * @used-by LocationTarget2
 */
final class MetroAreaTarget
{
    /**
     * An array of MetroAreaTargetBid objects that specifies the metropolitan areas to target and the incremental bid percentages to apply to the base bid.
     *
     * @var MetroAreaTargetBid[]
     */
    public $Bids;
}
