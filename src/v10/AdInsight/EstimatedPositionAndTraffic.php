<?php

namespace BingAds\v10\AdInsight;

/**
 * Defines an object that contains the estimated search results position and estimated keyword statistics such as clicks, average cost per click (CPC), impressions, click-through rate (CTR), and total cost for the specified keyword given the specified bid.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219324(v=msads.100).aspx EstimatedPositionAndTraffic Data Object
 * 
 * @uses MatchType
 * @uses Currency
 * @used-by KeywordEstimatedPosition
 */
final class EstimatedPositionAndTraffic
{
    /**
     * The keyword match type used to determine the estimates.
     *
     * @var MatchType
     */
    public $MatchType;
    /**
     * The estimated minimum number of clicks per week.
     *
     * @var float
     */
    public $MinClicksPerWeek;
    /**
     * The estimated maximum number of clicks per week.
     *
     * @var float
     */
    public $MaxClicksPerWeek;
    /**
     * The estimated average CPC.
     *
     * @var float
     */
    public $AverageCPC;
    /**
     * The estimated minimum number of impressions per week.
     *
     * @var int
     */
    public $MinImpressionsPerWeek;
    /**
     * The estimated maximum number of impressions per week.
     *
     * @var int
     */
    public $MaxImpressionsPerWeek;
    /**
     * The estimated CTR.
     *
     * @var float
     */
    public $CTR;
    /**
     * The estimated minimum cost per week.
     *
     * @var float
     */
    public $MinTotalCostPerWeek;
    /**
     * The estimated maximum cost per week.
     *
     * @var float
     */
    public $MaxTotalCostPerWeek;
    /**
     * The monetary unit of the cost values, such as AverageCPC.
     *
     * @var Currency
     */
    public $Currency;
    /**
     * The position in the search results given the specified bid.
     *
     * @var float
     */
    public $EstimatedAdPosition;
}
