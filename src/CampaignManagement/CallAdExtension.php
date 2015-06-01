<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that specifies a click-to-call phone number to include in a text ad.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj721598(v=msads.90).aspx CallAdExtension Data Object
 */
final class CallAdExtension extends AdExtension
{
    /**
     * The country code where the phone number is registered.
     *
     * @var string
     */
    public $CountryCode;
    /**
     * This element determines whether the preference is for the click to call phone number to be displayed on mobile devices or all devices.
     *
     * @var int
     */
    public $DevicePreference;
    /**
     * A Boolean value that determines whether the phone number is the only clickable item in the ad.
     *
     * @var bool
     */
    public $IsCallOnly;
    /**
     * A Boolean value that determines whether call tracking is enabled for the call ad extension.
     *
     * @var bool
     */
    public $IsCallTrackingEnabled;
    /**
     * The phone number to include in the ad.
     *
     * @var string
     */
    public $PhoneNumber;
    /**
     * A Boolean value that determines whether a toll-free tracking number should be created for call tracking.
     *
     * @var bool
     */
    public $RequireTollFreeTrackingNumber;
}
