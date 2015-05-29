<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the type of ad.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671537(v=msads.90).aspx AdType Value Set
 *
 * @used-by Ad
 */
final class AdType
{
    /** The ad is a text ad. */
    const TEXT = 'Text';
    /** Not used. */
    const IMAGE = 'Image';
    /** The ad is a mobile ad. */
    const MOBILE = 'Mobile';
    /** Not used. */
    const RICH_SEARCH = 'RichSearch';
    /** The ad is a product ad. */
    const PRODUCT = 'Product';
}
