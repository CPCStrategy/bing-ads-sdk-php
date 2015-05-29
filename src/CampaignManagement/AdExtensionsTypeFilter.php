<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible ad extension types.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj134394(v=msads.90).aspx AdExtensionsTypeFilter Value Set
 *
 * @used-by GetAdExtensionIdsByAccountIdRequest
 * @used-by GetAdExtensionsAssociationsRequest
 * @used-by GetAdExtensionsByIdsRequest
 */
final class AdExtensionsTypeFilter
{
    /** An ad extension that contains one or more site links to include in an ad. */
    const SITE_LINKS_AD_EXTENSION = 'SiteLinksAdExtension';
    /** An ad extension that contains the address and phone number of the business to include an ad. */
    const LOCATION_AD_EXTENSION = 'LocationAdExtension';
    /** An ad extension that contains a phone number to include in the ad and whether it's the only clickable item in an ad. */
    const CALL_AD_EXTENSION = 'CallAdExtension';
    /** An ad extension that identifies a Bing Merchant Center store that contains the products that you want to advertise. */
    const PRODUCTS_AD_EXTENSION = 'ProductsAdExtension';
    /** An ad extension that contains an image with alternative text to include in the ad. */
    const IMAGE_AD_EXTENSION = 'ImageAdExtension';
    /** An ad extension that contains a link to install an application from a supported app store. */
    const APP_AD_EXTENSION = 'AppAdExtension';
}
