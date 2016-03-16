<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a specific country or region target with bid adjustment.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671882(v=msads.90).aspx CountryTargetBid Data Object
 * 
 * @used-by CountryTarget
 */
final class CountryTargetBid
{
    /**
     * The percent amount by which to adjust the base bid if the user is in the targeted country/region.
     *
     * @var int
     */
    public $BidAdjustment;
    /**
     * The country to target.
     *
     * @var string
     */
    public $CountryAndRegion;
    /**
     * Set this element to true if you want to exclude the location from targeting.
     *
     * @var bool
     */
    public $IsExcluded;
}
