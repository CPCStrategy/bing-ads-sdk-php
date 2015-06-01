<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains estimates of clicks, average cost per click (CPC), impressions, click-through rate (CTR), and total cost for the specified ad group given the suggested bid.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn144841(v=msads.90).aspx AdGroupEstimatedBid Data Object
 *
 * @uses Currency
 * @used-by GetEstimatedBidByKeywordsResponse
 */
final class AdGroupEstimatedBid
{
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
     * The estimated ad group level default bid value.
     *
     * @var float
     */
    public $EstimatedAdGroupBid;
}
