<?php

namespace BingAds\Reporting;

/**
 * The AdExtensionDimensionReport is deprecated and is not supported.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj713609(v=msads.90).aspx AdExtensionDimensionReportColumn Value Set
 * 
 * @used-by AdExtensionDimensionReportRequest
 */
final class AdExtensionDimensionReportColumn
{
    /** The Bing Ads assigned identifier of an account. */
    const AccountId = 'AccountId';
    /** The type name that corresponds to the AdExtensionTypeId column. */
    const AdExtensionType = 'AdExtensionType';
    /** The Bing Ads assigned identifier of an ad extension. */
    const AdExtensionId = 'AdExtensionId';
    /** The version attribute of an ad extension. */
    const AdExtensionVersion = 'AdExtensionVersion';
    /** The current delivery status. */
    const Status = 'Status';
    /** Positive integer system identifiers ranging from 1 through 20, which map to properties of the ad extension. */
    const AdExtensionPropertyId = 'AdExtensionPropertyId';
    /** The human readable ad extension property value. */
    const AdExtensionPropertyValue = 'AdExtensionPropertyValue';
}
