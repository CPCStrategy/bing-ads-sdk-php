<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a product ad.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj738612(v=msads.90).aspx ProductAd Data Object
 */
final class ProductAd extends Ad
{
    /**
     * The promotional text to display in a product ad.
     *
     * @var string
     */
    public $PromotionalText;
}
