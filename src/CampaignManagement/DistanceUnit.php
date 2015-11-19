<?php

namespace BingAds\CampaignManagement;

/**
 * Currently this feature is only available for pilot participants, and will be generally available for all advertisers in Q3 2014.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743740(v=msads.90).aspx DistanceUnit Value Set
 * 
 * @used-by RadiusTargetBid2
 */
final class DistanceUnit
{
    /** The distance of the specified geographical location is specified in kilometers. */
    const Kilometers = 'Kilometers';
    /** The distance of the specified geographical location is specified in miles. */
    const Miles = 'Miles';
}
