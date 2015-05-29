<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the day values that you can specify for day of the week targeting.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671717(v=msads.90).aspx Day Value Set
 *
 * @used-by DayTargetBid
 * @used-by DayTimeTargetBid
 */
final class Day
{
    const SUNDAY = 'Sunday';
    const MONDAY = 'Monday';
    const TUESDAY = 'Tuesday';
    const WEDNESDAY = 'Wednesday';
    const THURSDAY = 'Thursday';
    const FRIDAY = 'Friday';
    const SATURDAY = 'Saturday';
}
