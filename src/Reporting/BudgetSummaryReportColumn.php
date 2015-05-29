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
    const ACCOUNT_NAME = 'AccountName';
    /** The Number element of an Account. */
    const ACCOUNT_NUMBER = 'AccountNumber';
    /** The Id element of an Account. */
    const ACCOUNT_ID = 'AccountId';
    /** The Name element of a Campaign. */
    const CAMPAIGN_NAME = 'CampaignName';
    /** The Id element of a Campaign. */
    const CAMPAIGN_ID = 'CampaignId';
    /** The date for the downloaded report records. */
    const DATE = 'Date';
    /** The CurrencyType element of an Account. */
    const CURRENCY_CODE = 'CurrencyCode';
    /** The budgeted amount of money to spend per month. */
    const MONTHLY_BUDGET = 'MonthlyBudget';
    /** Your budgeted amount of money to spend per day. */
    const DAILY_SPEND = 'DailySpend';
    /** The amount of money spent to date for the month. */
    const MONTH_TO_DATE_SPEND = 'MonthToDateSpend';
}
