<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Defines the type of ad.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671537(v=msads.100).aspx AdType Value Set
 * 
 * @used-by Ad
 */
final class AdType
{
    /** The ad is a text ad. */
    const Text = 'Text';
    /** Reserved for future use. */
    const Image = 'Image';
    /** The ad is a product ad. */
    const Product = 'Product';
    /** Reserved for future use. */
    const AppInstall = 'AppInstall';
}
