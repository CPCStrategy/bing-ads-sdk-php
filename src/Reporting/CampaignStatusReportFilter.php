<?php

namespace BingAds\Reporting;

/**
 * Defines the campaign status values that you can use to filter the report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb672004(v=msads.90).aspx CampaignStatusReportFilter Value Set
 *
 * @used-by CampaignPerformanceReportFilter
 * @used-by SearchQueryPerformanceReportFilter
 */
final class CampaignStatusReportFilter
{
    /** The same meaning as Active. */
    const SUBMITTED = 'Submitted';
    /** The report will contain campaigns that have been canceled. */
    const CANCELLED = 'Cancelled';
    /** The report will contain campaigns that have been deleted. */
    const DELETED = 'Deleted';
    /** The report will contain campaigns that are paused. */
    const PAUSED = 'Paused';
    /** The report will contain campaigns that are paused due to budget restrictions. */
    const BUDGET_PAUSED = 'BudgetPaused';
    /** The report will contain campaigns that are active. */
    const ACTIVE = 'Active';
}
