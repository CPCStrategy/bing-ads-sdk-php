<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a text ad.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb672081(v=msads.90).aspx TextAd Data Object
 */
final class TextAd extends Ad
{
    /**
     * The URL of the webpage to take the user to when they click the ad.
     *
     * @var string
     */
    public $DestinationUrl;
    /**
     * The URL to display in the ad.
     *
     * @var string
     */
    public $DisplayUrl;
    /**
     * The ad copy.
     *
     * @var string
     */
    public $Text;
    /**
     * The title of the ad.
     *
     * @var string
     */
    public $Title;
}
