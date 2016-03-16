<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains the key performance index data for the specified keyword and device.
 *
 * @link http://msdn.microsoft.com/en-us/library/gg986820(v=msads.90).aspx KeywordHistoricalPerformance Data Object
 * 
 * @uses KeywordKPI
 * @used-by GetHistoricalKeywordPerformanceResponse
 */
final class KeywordHistoricalPerformance
{
    /**
     * The keyword to which the keyword performance data applies.
     *
     * @var string
     */
    public $Keyword;
    /**
     * The type of device on which the user entered their search query.
     *
     * @var string
     */
    public $Device;
    /**
     * An array of KeywordKPI objects that contains the performance data.
     *
     * @var KeywordKPI[]
     */
    public $KeywordKPIs;
}
