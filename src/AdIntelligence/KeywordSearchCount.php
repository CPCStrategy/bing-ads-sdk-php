<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains the number of times the keyword was included in a search query on the specified device type.
 *
 * @link http://msdn.microsoft.com/en-us/library/gg712245(v=msads.90).aspx KeywordSearchCount Data Object
 * 
 * @uses HistoricalSearchCountPeriodic
 * @used-by GetHistoricalSearchCountResponse
 */
final class KeywordSearchCount
{
    /**
     * The keyword to which the search count data applies.
     *
     * @var string
     */
    public $Keyword;
    /**
     * The type of device on which users searched for the specified keyword.
     *
     * @var string
     */
    public $Device;
    /**
     * An array of HistoricalSearchCountPeriodic objects that contain a count of the number of times that the keyword was used in a search query.
     *
     * @var HistoricalSearchCountPeriodic[]
     */
    public $HistoricalSearchCounts;
}
