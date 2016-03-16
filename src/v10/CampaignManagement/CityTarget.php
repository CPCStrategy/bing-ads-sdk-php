<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Defines a list of cities to target with bid adjustments.
 *
 * @link http://msdn.microsoft.com/en-us/library/dd796959(v=msads.100).aspx CityTarget Data Object
 * 
 * @uses CityTargetBid
 * @used-by LocationTarget
 */
final class CityTarget
{
    /**
     * An array of cities to target with bid adjustments.
     *
     * @var CityTargetBid[]
     */
    public $Bids;
}
