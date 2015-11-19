<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a site link to include in an ad.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj134381(v=msads.100).aspx SiteLink Data Object
 * 
 * @uses AppUrl
 * @uses CustomParameters
 * @used-by SiteLinksAdExtension
 */
final class SiteLink
{
    /**
     * The site link description line 1.
     *
     * @var string
     */
    public $Description1;
    /**
     * The site link description line 2.
     *
     * @var string
     */
    public $Description2;
    /**
     * The URL of the webpage that users are taken to when they click the site link.
     *
     * @var string
     */
    public $DestinationUrl;
    /**
     * This element determines whether the preference is for site links to be displayed on mobile devices or all devices.
     *
     * @var int
     */
    public $DevicePreference;
    /**
     * The site-link text displayed in the ad.
     *
     * @var string
     */
    public $DisplayText;
    /**
     * Reserved for future use.
     *
     * @var AppUrl[]
     */
    public $FinalAppUrls;
    /**
     * The mobile landing page URL.
     *
     * @var string[]
     */
    public $FinalMobileUrls;
    /**
     * The landing page URL.
     *
     * @var string[]
     */
    public $FinalUrls;
    /**
     * The tracking template to use as a default for all FinalUrls and FinalMobileUrls.
     *
     * @var string
     */
    public $TrackingUrlTemplate;
    /**
     * Your custom collection of key and value parameters for URL tracking.
     *
     * @var CustomParameters
     */
    public $UrlCustomParameters;
}
