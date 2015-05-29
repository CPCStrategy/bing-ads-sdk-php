<?php

namespace BingAds\Optimizer;

/**
 * Defines the possible types of campaign budgets.
 *
 * @link http://msdn.microsoft.com/en-us/library/hh418067(v=msads.90).aspx BudgetLimitType Value Set
 *
 * @used-by BudgetOpportunity
 */
final class BudgetLimitType
{
    /** A monthly budget that is spent until it is depleted. */
    const MONTHLY_BUDGET_SPEND_UNTIL_DEPLETED = 'MonthlyBudgetSpendUntilDepleted';
    /** A daily budget that is spread throughout the day. */
    const DAILY_BUDGET_STANDARD = 'DailyBudgetStandard';
    /** A daily budget that is spent until it is depleted. */
    const DAILY_BUDGET_ACCELERATED = 'DailyBudgetAccelerated';
}
