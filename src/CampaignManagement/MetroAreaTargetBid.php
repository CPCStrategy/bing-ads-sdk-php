<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a metropolitan area to target and the percentage used to adjust the base bid.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb672080(v=msads.90).aspx MetroAreaTargetBid Data Object
 *
 * @used-by MetroAreaTarget
 */
final class MetroAreaTargetBid
{
    /**
     * The percent amount by which to adjust the base bid if the user is in the targeted metropolitan area.
     *
     * @var int
     */
    public $BidAdjustment;
    /**
     * Set this element to true if you want to exclude the location from targeting.
     *
     * @var bool
     */
    public $IsExcluded;
    /**
     * The metropolitan area to target.
     *
     * @var string
     */
    public $MetroArea;
}
