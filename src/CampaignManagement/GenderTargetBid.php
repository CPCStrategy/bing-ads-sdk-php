<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a specific gender target with bid adjustment.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671554(v=msads.90).aspx GenderTargetBid Data Object
 *
 * @uses GenderType
 * @used-by GenderTarget
 */
final class GenderTargetBid
{
    /**
     * The percent amount by which to adjust the base bid.
     *
     * @var int
     */
    public $BidAdjustment;
    /**
     * The gender to target.
     *
     * @var GenderType
     */
    public $Gender;
}
