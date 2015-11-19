<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a specific postal code target with bid adjustment.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743767(v=msads.100).aspx PostalCodeTargetBid Data Object
 * 
 * @used-by PostalCodeTarget
 */
final class PostalCodeTargetBid
{
    /**
     * The percent amount by which to adjust the base bid if the user is in the targeted postal code area.
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
     * The postal code to target.
     *
     * @var string
     */
    public $PostalCode;
}
