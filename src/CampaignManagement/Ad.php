<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the base object of an ad.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671952(v=msads.100).aspx Ad Data Object
 * 
 * @uses AdEditorialStatus
 * @uses AppUrl
 * @uses KeyValuePairOfstringstring
 * @uses AdStatus
 * @uses AdType
 * @uses CustomParameters
 * @used-by AddAdsRequest
 * @used-by GetAdsByAdGroupIdResponse
 * @used-by GetAdsByEditorialStatusResponse
 * @used-by GetAdsByIdsResponse
 * @used-by UpdateAdsRequest
 */
class Ad
{
    /**
     * This element determines whether the preference is for text ads to be displayed on mobile devices or all devices.
     *
     * @var int
     */
    public $DevicePreference;
    /**
     * The editorial review status of the ad, which indicates whether the ad is pending review, has been approved, or has been disapproved.
     *
     * @var AdEditorialStatus
     */
    public $EditorialStatus;
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
     * The list of key and value strings for forward compatibility.
     *
     * @var KeyValuePairOfstringstring[]
     */
    public $ForwardCompatibilityMap;
    /**
     * The system generated identifier of the ad.
     *
     * @var int
     */
    public $Id;
    /**
     * The status of the ad.
     *
     * @var AdStatus
     */
    public $Status;
    /**
     * The tracking template to use as a default for all FinalUrls and FinalMobileUrls.
     *
     * @var string
     */
    public $TrackingUrlTemplate;
    /**
     * The type of the ad.
     *
     * @var AdType
     */
    public $Type;
    /**
     * Your custom collection of key and value parameters for URL tracking.
     *
     * @var CustomParameters
     */
    public $UrlCustomParameters;
}
