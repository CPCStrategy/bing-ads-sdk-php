<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the product offer performance report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743718(v=msads.90).aspx ProductOfferPerformanceReportFilter Data Object
 *
 * @uses DeviceTypeReportFilter
 * @used-by ProductOfferPerformanceReportRequest
 */
final class ProductOfferPerformanceReportFilter
{
    /**
     * The report will include data for only the specified types of devices on which the ad is displayed.
     *
     * @var DeviceTypeReportFilter
     */
    public $DeviceType;
    /**
     * The report will include data for only websites that used the specified languages.
     *
     * @var string[]
     */
    public $LanguageCode;
}
