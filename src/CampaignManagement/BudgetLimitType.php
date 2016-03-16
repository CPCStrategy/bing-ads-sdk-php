<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible budget types that you can specify for a campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb672035(v=msads.90).aspx BudgetLimitType Value Set
 * 
 * @used-by Campaign
 */
final class BudgetLimitType
{
    /** A monthly budget that is spent until it is depleted. */
    const MonthlyBudgetSpendUntilDepleted = 'MonthlyBudgetSpendUntilDepleted';
    /** A daily budget that is spent until it is depleted. */
    const DailyBudgetAccelerated = 'DailyBudgetAccelerated';
    /** A daily budget that is spread throughout the day. */
    const DailyBudgetStandard = 'DailyBudgetStandard';
}
