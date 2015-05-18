<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a list of age ranges to target with bid adjustments.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb672084(v=msads.90).aspx AgeTarget Data Object
 *
 * @uses AgeTargetBid
 * @used-by Target
 * @used-by Target2
 */
final class AgeTarget
{
    /**
     * An array of of age ranges to target with bid adjustments.
     *
     * @var AgeTargetBid[]
     */
    public $Bids;
}
