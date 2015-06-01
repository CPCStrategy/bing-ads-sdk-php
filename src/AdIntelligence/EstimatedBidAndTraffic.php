<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains estimates of clicks, average cost per click (CPC), impressions, click-through rate (CTR), and total cost for the specified keyword given the suggested bid.
 *
 * @link http://msdn.microsoft.com/en-us/library/gg986821(v=msads.90).aspx EstimatedBidAndTraffic Data Object
 *
 * @uses MatchType
 * @uses Currency
 * @used-by KeywordEstimatedBid
 */
final class EstimatedBidAndTraffic
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
     * The monetary unit of the cost estimates and suggested bid value.
     *
     * @var Currency
     */
    public $Currency;
    /**
     * The suggested bid value.
     *
     * @var float
     */
    public $EstimatedMinBid;
}
