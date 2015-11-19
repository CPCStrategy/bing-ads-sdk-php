<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a specific device target with bid adjustment.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn249988(v=msads.100).aspx DeviceOSTargetBid Data Object
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
     * This element is deprecated and will be sunset in a future version of the API.
     *
     * @var string[]
     */
    public $OSNames;
}
