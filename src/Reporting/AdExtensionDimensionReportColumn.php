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
    /** The Id element of an Account. */
    const ACCOUNT_ID = 'AccountId';
    /** The type name that corresponds to the AdExtensionTypeId column. */
    const AD_EXTENSION_TYPE = 'AdExtensionType';
    /** The Id element of either the CallAdExtension, LocationAdExtension, ProductAdExtension, or SiteLinksAdExtension, which is inherited from the AdExtension base object. */
    const AD_EXTENSION_ID = 'AdExtensionId';
    /** The Version element of either the CallAdExtension, LocationAdExtension, ProductAdExtension, or SiteLinksAdExtension, which is inherited from the AdExtension base object. */
    const AD_EXTENSION_VERSION = 'AdExtensionVersion';
    /** The current delivery status. */
    const STATUS = 'Status';
    /** Positive integer system identifiers ranging from 1 through 20, which map to properties of the CallAdExtension, LocationAdExtension, and SiteLink objects. */
    const AD_EXTENSION_PROPERTY_ID = 'AdExtensionPropertyId';
    /** The human readable ad extension property value. */
    const AD_EXTENSION_PROPERTY_VALUE = 'AdExtensionPropertyValue';
}
