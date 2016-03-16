<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a list of geographical radius targets with bid adjustments.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743744(v=msads.90).aspx RadiusTarget2 Data Object
 * 
 * @uses RadiusTargetBid2
 * @used-by LocationTarget2
 */
final class RadiusTarget2
{
    /**
     * An array of RadiusTargetBid2 objects that specifies an area surrounding a geographical location to target and the bid adjustment to apply to the base bid.
     *
     * @var RadiusTargetBid2[]
     */
    public $Bids;
}
