<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Defines an image media representation with height and width.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn766197(v=msads.100).aspx ImageMediaRepresentation Data Object
 */
final class ImageMediaRepresentation extends MediaRepresentation
{
    /**
     * The height of the image in pixels.
     *
     * @var int
     */
    public $Height;
    /**
     * The width of the image in pixels.
     *
     * @var int
     */
    public $Width;
}
