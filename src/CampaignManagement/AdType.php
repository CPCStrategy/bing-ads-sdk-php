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
    const Text = 'Text';
    /** Not used. */
    const Image = 'Image';
    /** The ad is a mobile ad. */
    const Mobile = 'Mobile';
    /** Not used. */
    const RichSearch = 'RichSearch';
    /** The ad is a product ad. */
    const Product = 'Product';
}
