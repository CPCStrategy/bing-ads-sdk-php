<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the base object of media.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn195580(v=msads.100).aspx Media Data Object
 * 
 * @used-by AddMediaRequest
 * @used-by GetMediaByIdsResponse
 */
class Media
{
    /**
     * The system generated identifier of the media.
     *
     * @var int
     */
    public $Id;
    /**
     * This read-only element is the name of the media subclass.
     *
     * @var string
     */
    public $MediaType;
    /**
     * The type of media to add to the library.
     *
     * @var string
     */
    public $Type;
}
