<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a mobile ad.
 *
 * @link http://msdn.microsoft.com/en-us/library/cc512741(v=msads.90).aspx MobileAd Data Object
 */
final class MobileAd extends Ad
{
    /**
     * The name of the business being advertised.
     *
     * @var string
     */
    public $BusinessName;
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
     * The phone number to dial when the user clicks the ad.
     *
     * @var string
     */
    public $PhoneNumber;
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
