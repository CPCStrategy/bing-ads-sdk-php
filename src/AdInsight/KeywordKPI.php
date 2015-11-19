<?php

namespace BingAds\AdInsight;

/**
 * Defines a key performance index object for a keyword.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219293(v=msads.100).aspx KeywordKPI Data Object
 * 
 * @uses MatchType
 * @uses AdPosition
 * @used-by KeywordHistoricalPerformance
 */
final class KeywordKPI
{
    /**
     * The device where the ad appeared.
     *
     * @var string
     */
    public $Device;
    /**
     * The match type that you specified in the request.
     *
     * @var MatchType
     */
    public $MatchType;
    /**
     * The position in the search results in which the ad appeared.
     *
     * @var AdPosition
     */
    public $AdPosition;
    /**
     * The number of clicks that the keyword and match type generated during the specified time interval.
     *
     * @var int
     */
    public $Clicks;
    /**
     * The number of impressions that the keyword and match type generated during the specified time interval.
     *
     * @var int
     */
    public $Impressions;
    /**
     * The average cost per click (CPC).
     *
     * @var float
     */
    public $AverageCPC;
    /**
     * The click-through rate (CTR) as a percentage.
     *
     * @var float
     */
    public $CTR;
    /**
     * The cost of using the specified keyword and match type during the specified time interval.
     *
     * @var float
     */
    public $TotalCost;
    /**
     * The average bid of the keyword.
     *
     * @var float
     */
    public $AverageBid;
}
