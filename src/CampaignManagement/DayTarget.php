<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a list of days to target with bid adjustments.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671942(v=msads.90).aspx DayTarget Data Object
 *
 * @uses DayTargetBid
 * @used-by Target
 */
final class DayTarget
{
    /**
     * An array of days to target with bid adjustments.
     *
     * @var DayTargetBid[]
     */
    public $Bids;
    /**
     * Determines whether to participate in auctions only on the days of the week that you specified or to participate on all days of the week.
     *
     * @var bool
     */
    public $TargetAllDays;
}
