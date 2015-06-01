<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an image object that can be added to an account's media library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn195581(v=msads.90).aspx Image Data Object
 */
final class Image extends Media
{
    /**
     * A base64 string that represents the image or icon to add to the library.
     *
     * @var string
     */
    public $Data;
}
