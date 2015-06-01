<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the goals and funnels report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/gg262854(v=msads.90).aspx GoalsAndFunnelsReportFilter Data Object
 *
 * @used-by GoalsAndFunnelsReportRequest
 */
final class GoalsAndFunnelsReportFilter
{
    /**
     * The report will include data for only the specified goals.
     *
     * @var integer[]
     */
    public $GoalIds;
}
