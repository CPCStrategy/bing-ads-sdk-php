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
    const SUBMITTED = 'Submitted';
    /** The report will contain ads that have been rejected by editorial review. */
    const REJECTED = 'Rejected';
    /** The report will contain ads that have been deleted. */
    const DELETED = 'Deleted';
    /** The report will contain ads that are pending editorial review. */
    const PENDING = 'Pending';
    /** The report will contain ads that are active. */
    const ACTIVE = 'Active';
}
