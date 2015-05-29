<?php

namespace BingAds\Reporting;

/**
 * Defines the ad group status values that you can use to filter the report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671991(v=msads.90).aspx AdGroupStatusReportFilter Value Set
 *
 * @used-by AdGroupPerformanceReportFilter
 */
final class AdGroupStatusReportFilter
{
    /** The same meaning as Active. */
    const SUBMITTED = 'Submitted';
    /** The report will contain ad groups that have been deleted. */
    const DELETED = 'Deleted';
    /** The report will contain ad groups that have expired. */
    const EXPIRED = 'Expired';
    /** The report will contain ad groups that are in a draft state. */
    const DRAFT = 'Draft';
    /** The report will contain ad groups that are paused. */
    const PAUSED = 'Paused';
    /** The report will contain ad groups that are active. */
    const ACTIVE = 'Active';
}
