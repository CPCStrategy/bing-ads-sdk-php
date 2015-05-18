<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a list of geographical radius targets with bid adjustments.
 *
 * @link http://msdn.microsoft.com/en-us/library/dd796953(v=msads.90).aspx RadiusTarget Data Object
 *
 * @uses RadiusTargetBid
 * @used-by LocationTarget
 */
final class RadiusTarget
{
    /**
     * An array of RadiusTargetBid objects that specifies an area surrounding a geographical location to target and the incremental bid percentages to apply to the base bid.
     *
     * @var RadiusTargetBid[]
     */
    public $Bids;
}
