<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible minute values for a day and time target hour range.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743745(v=msads.100).aspx Minute Value Set
 * 
 * @used-by DayTimeTargetBid
 */
final class Minute
{
    /** The starting or ending minute of the hour range is zero. */
    const Zero = 'Zero';
    /** The starting or ending minute of the hour range is fifteen. */
    const Fifteen = 'Fifteen';
    /** The starting or ending minute of the hour range is thirty. */
    const Thirty = 'Thirty';
    /** The starting or ending minute of the hour range is forty-five. */
    const FortyFive = 'FortyFive';
}
