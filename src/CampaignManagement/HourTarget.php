<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a list of hour target ranges with bid adjustments.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671826(v=msads.90).aspx HourTarget Data Object
 *
 * @uses HourTargetBid
 * @used-by Target
 */
final class HourTarget
{
    /**
     * An array of HourTargetBid objects that specifies the times of the day to target and the incremental bid percentages to apply to the base bid.
     *
     * @var HourTargetBid[]
     */
    public $Bids;
    /**
     * Determines whether to participate in auctions only during the times of the day that you specified or to participate at all times of the day.
     *
     * @var bool
     */
    public $TargetAllHours;
}
