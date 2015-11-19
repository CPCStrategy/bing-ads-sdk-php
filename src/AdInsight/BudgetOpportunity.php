<?php

namespace BingAds\AdInsight;

/**
 * Defines an object that contains the suggested budget with estimated clicks and impressions opportunities.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219334(v=msads.100).aspx BudgetOpportunity Data Object
 * 
 * @uses BudgetPoint
 * @uses BudgetLimitType
 * @used-by GetBudgetOpportunitiesResponse
 */
final class BudgetOpportunity extends Opportunity
{
    /**
     * The list of budget points with weekly impressions, clicks and cost estimates for the given budget amount.
     *
     * @var BudgetPoint[]
     */
    public $BudgetPoints;
    /**
     * The type of budget that the campaign uses.
     *
     * @var BudgetLimitType
     */
    public $BudgetType;
    /**
     * The identifier of the campaign to which the suggested budget applies.
     *
     * @var int
     */
    public $CampaignId;
    /**
     * The campaign's current budget.
     *
     * @var float
     */
    public $CurrentBudget;
    /**
     * The estimated clicks opportunities corresponding to the suggested budget.
     *
     * @var float
     */
    public $IncreaseInClicks;
    /**
     * The estimated impressions opportunities corresponding to the suggested budget.
     *
     * @var int
     */
    public $IncreaseInImpressions;
    /**
     * The estimated percentage increase in clicks corresponding to the suggested budget.
     *
     * @var int
     */
    public $PercentageIncreaseInClicks;
    /**
     * The estimated percentage increase in impressions corresponding to the suggested budget.
     *
     * @var int
     */
    public $PercentageIncreaseInImpressions;
    /**
     * The suggested budget based on the last 15 days of performance history for the corresponding campaign.
     *
     * @var float
     */
    public $RecommendedBudget;
}
