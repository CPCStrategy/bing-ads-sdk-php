<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a list of devices to target with bid adjustments.
 *
 * @link http://msdn.microsoft.com/en-us/library/hh527704(v=msads.90).aspx DeviceOSTarget Data Object
 *
 * @uses DeviceOSTargetBid
 * @used-by Target
 * @used-by Target2
 */
final class DeviceOSTarget
{
    /**
     * An array of devices to target with bid adjustments.
     *
     * @var DeviceOSTargetBid[]
     */
    public $Bids;
}
