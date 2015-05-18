<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a specific hour target range with bid adjustment.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671597(v=msads.90).aspx HourTargetBid Data Object
 *
 * @uses HourRange
 * @used-by HourTarget
 */
final class HourTargetBid
{
    /**
     * The percent amount by which to adjust the base bid if the current time is within the range of hours being targeted.
     *
     * @var int
     */
    public $BidAdjustment;
    /**
     * The time range to target.
     *
     * @var HourRange
     */
    public $Hour;
}
