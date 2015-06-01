<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a list of postal code targets with bid adjustments.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743743(v=msads.90).aspx PostalCodeTarget Data Object
 *
 * @uses PostalCodeTargetBid
 * @used-by LocationTarget2
 */
final class PostalCodeTarget
{
    /**
     * An array of PostalCodeTargetBid objects that specifies the times of the postal code to target and the bid adjustment to apply to the base bid.
     *
     * @var PostalCodeTargetBid[]
     */
    public $Bids;
}
