<?php

namespace BingAds\CampaignManagement;

/**
 * Currently this feature is only available for pilot participants.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn766199(v=msads.90).aspx ImageAdExtension Data Object
 */
final class ImageAdExtension extends AdExtension
{
    /**
     * Alternative description of the image media for usability.
     *
     * @var string
     */
    public $AlternativeText;
    /**
     * Description that can be used by the advertiser, agency, or account manager to track, label, or manage image media.
     *
     * @var string
     */
    public $Description;
    /**
     * The URL of the webpage to take the user to when they click the image.
     *
     * @var string
     */
    public $DestinationUrl;
    /**
     * The identifier of the image to include in the ad.
     *
     * @var int
     */
    public $ImageMediaId;
}
