<?php

namespace BingAds\Optimizer;

/**
 * Defines an object that contains a budget amount and an estimate of daily impressions, clicks, and cost for this budget amount averaged over the last 15 days.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn434659(v=msads.90).aspx BudgetPoint Data Object
 *
 * @uses BudgetLandscapePoint
 * @uses BudgetPointType
 * @used-by CampaignBudgetLandscape
 */
final class BudgetPoint
{
    /**
     * A potential new budget.
     *
     * @var float
     */
    public $BudgetAmount;
    /**
     * The list of budget landscape points with daily impressions and clicks estimates for the last 15 days.
     *
     * @var BudgetLandscapePoint[]
     */
    public $BudgetLandscapePoints;
    /**
     * The type of budget relative to a list of budget points.
     *
     * @var BudgetPointType
     */
    public $BudgetPointType;
    /**
     * The estimated average daily clicks for the given budget amount.
     *
     * @var float
     */
    public $EstimatedAvgDailyClicks;
    /**
     * The estimated average daily cost for the given budget amount.
     *
     * @var float
     */
    public $EstimatedAvgDailyCost;
    /**
     * The estimated average daily impressions for the given budget amount.
     *
     * @var float
     */
    public $EstimatedAvgDailyImpressions;
}
