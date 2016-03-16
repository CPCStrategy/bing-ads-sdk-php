<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a list of cities to target with bid adjustments.
 *
 * @link http://msdn.microsoft.com/en-us/library/dd796959(v=msads.90).aspx CityTarget Data Object
 * 
 * @uses CityTargetBid
 * @used-by LocationTarget
 * @used-by LocationTarget2
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
