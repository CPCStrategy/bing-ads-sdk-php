<?php

namespace BingAds\Reporting;

/**
 * Defines the ad type values that you can use to filter the report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/cc580687(v=msads.90).aspx AdTypeReportFilter Value Set
 *
 * @used-by AdDynamicTextPerformanceReportFilter
 * @used-by AdPerformanceReportFilter
 * @used-by KeywordPerformanceReportFilter
 * @used-by SearchQueryPerformanceReportFilter
 * @used-by SitePerformanceReportFilter
 */
final class AdTypeReportFilter
{
    /** The report will include text ads. */
    const TEXT = 'Text';
    /** The report will include mobile ads. */
    const MOBILE = 'Mobile';
    /** Not supported. */
    const IMAGE = 'Image';
    /** Not supported. */
    const LOCAL = 'Local';
    /** Not supported. */
    const RICH_MEDIA = 'RichMedia';
    /** The report will contain creative ads that are served by third parties. */
    const THIRD_PARTY_CREATIVE = 'ThirdPartyCreative';
    /** The report will include rich ads. */
    const RICH_AD = 'RichAd';
    /** The report will include product ads. */
    const PRODUCT = 'Product';
}
