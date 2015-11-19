<?php

namespace BingAds\AdInsight;

/**
 * Defines an object that contains a budget amount and an estimate of weekly impressions, clicks, and cost for this budget amount.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219337(v=msads.100).aspx BudgetPoint Data Object
 * 
 * @uses BudgetPointType
 * @used-by BudgetOpportunity
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
     * The type of budget relative to a list of budget points.
     *
     * @var BudgetPointType
     */
    public $BudgetPointType;
    /**
     * The estimated weekly clicks for the given budget amount.
     *
     * @var float
     */
    public $EstimatedWeeklyClicks;
    /**
     * The estimated weekly cost for the given budget amount.
     *
     * @var float
     */
    public $EstimatedWeeklyCost;
    /**
     * The estimated weekly impressions for the given budget amount.
     *
     * @var float
     */
    public $EstimatedWeeklyImpressions;
}
