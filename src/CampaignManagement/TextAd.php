<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a text ad.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb672081(v=msads.90).aspx TextAd Data Object
 */
final class TextAd extends Ad
{
    public $DestinationUrl;
    public $DisplayUrl;
    public $Text;
    public $Title;
}
