<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Defines the possible distance units of a geographical location.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743740(v=msads.100).aspx DistanceUnit Value Set
 * 
 * @used-by RadiusTargetBid
 */
final class DistanceUnit
{
    /** The distance of the specified geographical location is specified in miles. */
    const Miles = 'Miles';
    /** The distance of the specified geographical location is specified in kilometers. */
    const Kilometers = 'Kilometers';
}
