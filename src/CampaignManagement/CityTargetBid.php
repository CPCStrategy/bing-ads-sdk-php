<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a specific city target with bid adjustment.
 *
 * @link http://msdn.microsoft.com/en-us/library/dd796932(v=msads.90).aspx CityTargetBid Data Object
 * 
 * @used-by CityTarget
 */
final class CityTargetBid
{
    /**
     * The percent amount by which to adjust the base bid if the user is in the targeted city.
     *
     * @var int
     */
    public $BidAdjustment;
    /**
     * The city to target.
     *
     * @var string
     */
    public $City;
    /**
     * Set this element to true if you want to exclude the location from targeting.
     *
     * @var bool
     */
    public $IsExcluded;
}
