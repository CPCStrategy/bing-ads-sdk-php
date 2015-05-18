<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the traffic sources report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/gg262844(v=msads.90).aspx TrafficSourcesReportFilter Data Object
 *
 * @used-by TrafficSourcesReportRequest
 */
final class TrafficSourcesReportFilter
{
    /**
     * The report will include data for only the specified goals.
     *
     * @var integer[]
     */
    public $GoalIds;
}
