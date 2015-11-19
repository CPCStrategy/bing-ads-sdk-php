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
    const Submitted = 'Submitted';
    /** The report will contain campaigns that have been canceled. */
    const Cancelled = 'Cancelled';
    /** The report will contain campaigns that have been deleted. */
    const Deleted = 'Deleted';
    /** The report will contain campaigns that are paused. */
    const Paused = 'Paused';
    /** The report will contain campaigns that are paused due to budget restrictions. */
    const BudgetPaused = 'BudgetPaused';
    /** The report will contain campaigns that are active. */
    const Active = 'Active';
}
