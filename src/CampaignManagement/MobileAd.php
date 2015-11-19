<?php

namespace BingAds\CampaignManagement;

/**
 * Bing Ads WAP (Wireless Application Protocol) mobile ads are pay-per-click ads that are displayed on Bing and Yahoo mobile search results pages.
 *
 * @link http://msdn.microsoft.com/en-us/library/cc512741(v=msads.90).aspx MobileAd Data Object
 */
final class MobileAd extends Ad
{
    public $BusinessName;
    public $DestinationUrl;
    public $DisplayUrl;
    public $PhoneNumber;
    public $Text;
    public $Title;
}
