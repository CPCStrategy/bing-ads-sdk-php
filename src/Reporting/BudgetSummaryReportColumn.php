<?php

namespace BingAds\Reporting;

/**
 * Defines the attributes and performance statistics columns that you can include in the BudgetSummaryReportRequest.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671925(v=msads.90).aspx BudgetSummaryReportColumn Value Set
 *
 * @used-by BudgetSummaryReportRequest
 */
final class BudgetSummaryReportColumn
{
    /** The Name element of an Account. */
    const AccountName = 'AccountName';
    /** The Number element of an Account. */
    const AccountNumber = 'AccountNumber';
    /** The Id element of an Account. */
    const AccountId = 'AccountId';
    /** The Name element of a Campaign. */
    const CampaignName = 'CampaignName';
    /** The Id element of a Campaign. */
    const CampaignId = 'CampaignId';
    /** The date for the downloaded report records. */
    const Date = 'Date';
    /** The CurrencyType element of an Account. */
    const CurrencyCode = 'CurrencyCode';
    /** The budgeted amount of money to spend per month. */
    const MonthlyBudget = 'MonthlyBudget';
    /** Your budgeted amount of money to spend per day. */
    const DailySpend = 'DailySpend';
    /** The amount of money spent to date for the month. */
    const MonthToDateSpend = 'MonthToDateSpend';
}
