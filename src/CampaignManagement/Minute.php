<?php

namespace BingAds\CampaignManagement;

/**
 * Currently this feature is only available for pilot participants, and will be generally available for all advertisers in Q3 2014.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743745(v=msads.90).aspx Minute Value Set
 *
 * @used-by DayTimeTargetBid
 */
final class Minute
{
    /** The starting or ending minute of the hour range is zero. */
    const ZERO = 'Zero';
    /** The starting or ending minute of the hour range is fifteen. */
    const FIFTEEN = 'Fifteen';
    /** The starting or ending minute of the hour range is thirty. */
    const THIRTY = 'Thirty';
    /** The starting or ending minute of the hour range is forty-five. */
    const FORTY_FIVE = 'FortyFive';
}
