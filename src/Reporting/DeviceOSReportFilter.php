<?php

namespace BingAds\Reporting;

/**
 * Defines the device operating system values that you can use to filter the report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn411633(v=msads.90).aspx DeviceOSReportFilter Value Set
 *
 * @used-by AccountPerformanceReportFilter
 * @used-by AdExtensionByAdReportFilter
 * @used-by AdExtensionByKeywordReportFilter
 * @used-by AdExtensionDetailReportFilter
 * @used-by AdExtensionDimensionReportFilter
 * @used-by AdGroupPerformanceReportFilter
 * @used-by CampaignPerformanceReportFilter
 */
final class DeviceOSReportFilter
{
    /** The report will include ads displayed on a device operating system other than Android, BlackBerry, iOS, and Windows. */
    const OTHER = 'Other';
    /** The report will include ads displayed on Windows device operating systems. */
    const WINDOWS = 'Windows';
    /** The report will include ads displayed on iOS device operating systems. */
    const I_OS = 'iOS';
    /** The report will include ads displayed on Android device operating systems. */
    const ANDROID = 'Android';
    /** The report will include ads displayed on BlackBerry device operating systems. */
    const BLACK_BERRY = 'BlackBerry';
}
