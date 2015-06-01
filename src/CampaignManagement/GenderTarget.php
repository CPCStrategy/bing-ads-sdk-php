<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a list of genders to target with bid adjustments.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671655(v=msads.90).aspx GenderTarget Data Object
 *
 * @uses GenderTargetBid
 * @used-by Target
 * @used-by Target2
 */
final class GenderTarget
{
    /**
     * An array of genders to target with bid adjustments.
     *
     * @var GenderTargetBid[]
     */
    public $Bids;
}
