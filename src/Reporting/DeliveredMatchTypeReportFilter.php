<?php

namespace BingAds\Reporting;

/**
 * Defines the delivered match type values that you can use to filter the report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671749(v=msads.90).aspx DeliveredMatchTypeReportFilter Value Set
 * 
 * @used-by BrandZonePerformanceReportFilter
 * @used-by KeywordPerformanceReportFilter
 * @used-by SearchQueryPerformanceReportFilter
 * @used-by ShareOfVoiceReportFilter
 * @used-by SitePerformanceReportFilter
 */
final class DeliveredMatchTypeReportFilter
{
    /** The report will contain ads that were delivered by using an exact match comparison. */
    const Exact = 'Exact';
    /** The report will contain ads that were delivered by using a phrase match comparison. */
    const Phrase = 'Phrase';
    /** The report will contain ads that were delivered using a broad match comparison. */
    const Broad = 'Broad';
    /** The report will contain ads that were delivered by using a content match comparison. */
    const Content = 'Content';
}
