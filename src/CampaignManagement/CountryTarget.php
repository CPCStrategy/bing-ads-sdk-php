<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a list of countries or regions to target with bid adjustments.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671605(v=msads.90).aspx CountryTarget Data Object
 * 
 * @uses CountryTargetBid
 * @used-by LocationTarget
 * @used-by LocationTarget2
 */
final class CountryTarget
{
    /**
     * An array of countries or regions to target with bid adjustments.
     *
     * @var CountryTargetBid[]
     */
    public $Bids;
}
