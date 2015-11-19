<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a specific day target with bid adjustment.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671920(v=msads.90).aspx DayTargetBid Data Object
 *
 * @uses Day
 * @used-by DayTarget
 */
final class DayTargetBid
{
    /**
     * The percent amount by which to adjust the base bid if today is the day of the week being targeted.
     *
     * @var int
     */
    public $BidAdjustment;
    /**
     * The day of the week to target.
     *
     * @var Day
     */
    public $Day;
}
