<?php

namespace BingAds\Reporting;

/**
 * Defines the ad status values that you can use to filter the report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/hh560533(v=msads.90).aspx AdStatusReportFilter Value Set
 * 
 * @used-by SearchQueryPerformanceReportFilter
 */
final class AdStatusReportFilter
{
    /** The same meaning as Active. */
    const Submitted = 'Submitted';
    /** The report will contain ads that have been rejected by editorial review. */
    const Rejected = 'Rejected';
    /** The report will contain ads that have been deleted. */
    const Deleted = 'Deleted';
    /** The report will contain ads that are pending editorial review. */
    const Pending = 'Pending';
    /** The report will contain ads that are active. */
    const Active = 'Active';
}
