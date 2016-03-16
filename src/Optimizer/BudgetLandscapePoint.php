<?php

namespace BingAds\Optimizer;

/**
 * Defines an object that contains daily impressions and clicks estimates for one of the last 15 days.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn434658(v=msads.90).aspx BudgetLandscapePoint Data Object
 * 
 * @used-by BudgetPoint
 */
final class BudgetLandscapePoint
{
    /**
     * Represents one day within the last 15 days.
     *
     * @var \DateTime
     */
    public $BudgetLandscapePointDate;
    /**
     * The real historical campaign clicks performance for the day, if the budget on the corresponding day is equal to your current budget.
     *
     * @var float
     */
    public $Clicks;
    /**
     * The estimated clicks performance for the day , given the provided BudgetAmount element of the BudgetPoint object.
     *
     * @var float
     */
    public $EstimatedClicks;
    /**
     * The estimated impressions performance for the day, given the provided BudgetAmount element of the BudgetPoint object.
     *
     * @var int
     */
    public $EstimatedImpressions;
    /**
     * The real historical campaign impressions performance for the day, if the budget on the corresponding day is equal to your current budget.
     *
     * @var int
     */
    public $Impressions;
}
