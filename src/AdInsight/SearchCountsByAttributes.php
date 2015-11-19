<?php

namespace BingAds\AdInsight;

/**
 * Defines an object that contains a list of keyword historical search counts for the corresponding device attribute.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt179362(v=msads.100).aspx SearchCountsByAttributes Data Object
 * 
 * @uses HistoricalSearchCountPeriodic
 * @used-by KeywordSearchCount
 */
final class SearchCountsByAttributes
{
    /**
     * The device of the user who entered the search query.
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
