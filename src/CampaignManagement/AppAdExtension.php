<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an app ad extension that can be included in a text ad.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn817898(v=msads.100).aspx AppAdExtension Data Object
 * 
 * @uses AppUrl
 * @uses CustomParameters
 */
final class AppAdExtension extends AdExtension
{
    /**
     * The application platform.
     *
     * @var string
     */
    public $AppPlatform;
    /**
     * The application identifier provided by the app store.
     *
     * @var string
     */
    public $AppStoreId;
    /**
     * The URL of the app store download webpage that users are taken to when they click the app extension link.
     *
     * @var string
     */
    public $DestinationUrl;
    /**
     * This element determines whether the preference is for the app extension to be displayed on mobile devices or all devices.
     *
     * @var int
     */
    public $DevicePreference;
    /**
     * The text displayed in the app ad extension.
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
     * Reserved for future use.
     *
     * @var string[]
     */
    public $FinalMobileUrls;
    /**
     * Reserved for future use.
     *
     * @var string[]
     */
    public $FinalUrls;
    /**
     * Reserved for future use.
     *
     * @var string
     */
    public $TrackingUrlTemplate;
    /**
     * Reserved for future use.
     *
     * @var CustomParameters
     */
    public $UrlCustomParameters;
}
