<?php

namespace BingAds\Reporting;

/**
 * Defines an age and gender demographic report request.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671917(v=msads.90).aspx AgeGenderDemographicReportRequest Data Object
 * 
 * @uses NonHourlyReportAggregation
 * @uses AgeGenderDemographicReportColumn
 * @uses AgeGenderDemographicReportFilter
 * @uses AccountThroughAdGroupReportScope
 * @uses ReportTime
 */
final class AgeGenderDemographicReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use to aggregate the report data.
     *
     * @var NonHourlyReportAggregation
     */
    public $Aggregation;
    /**
     * @var AgeGenderDemographicReportColumn[]
     */
    public $Columns;
    /**
     * The filter information to use to filter the report data.
     *
     * @var AgeGenderDemographicReportFilter
     */
    public $Filter;
    /**
     * The scope of the report.
     *
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;
    /**
     * The time period to use for the report.
     *
     * @var ReportTime
     */
    public $Time;
}
