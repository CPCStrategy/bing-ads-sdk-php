<?php

namespace BingAds\AdIntelligence;

/**
 * Defines the possible time periods that determine the pool of data that the service uses to get the performance statistics of a keyword.
 *
 * @link http://msdn.microsoft.com/en-us/library/gg670967(v=msads.90).aspx TimeInterval Value Set
 *
 * @used-by GetHistoricalKeywordPerformanceRequest
 * @used-by GetPublisherKeywordPerformanceRequest
 */
final class TimeInterval
{
    /** Use data from the previous calendar month. */
    const LAST30_DAYS = 'Last30Days';
    /** Use data from last week, Sunday through Saturday. */
    const LAST7_DAYS = 'Last7Days';
    /** Use data from yesterday. */
    const LAST_DAY = 'LastDay';
}
