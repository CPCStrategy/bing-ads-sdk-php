<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a specific device target with bid adjustment.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn249988(v=msads.90).aspx DeviceOSTargetBid Data Object
 * 
 * @used-by DeviceOSTarget
 */
final class DeviceOSTargetBid
{
    /**
     * The percent amount by which to adjust the base bid for the specified device target.
     *
     * @var int
     */
    public $BidAdjustment;
    /**
     * The name of the device to target.
     *
     * @var string
     */
    public $DeviceName;
    /**
     * Starting with the Computers and Tablets Device Target Consolidation (Q3 2014), operating systems for Tablets are no longer supported.
     *
     * @var string[]
     */
    public $OSNames;
}
