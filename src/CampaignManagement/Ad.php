<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the base object of an ad.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671952(v=msads.90).aspx Ad Data Object
 *
 * @uses AdEditorialStatus
 * @uses KeyValuePairOfstringstring
 * @uses AdStatus
 * @uses AdType
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
     * The type of the ad.
     *
     * @var AdType
     */
    public $Type;
}
