<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a media meta data object.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn766198(v=msads.90).aspx MediaMetaData Data Object
 * 
 * @uses MediaRepresentation
 * @used-by GetMediaMetaDataByAccountIdResponse
 * @used-by GetMediaMetaDataByIdsResponse
 */
final class MediaMetaData
{
    /**
     * The system identifier of the media meta data.
     *
     * @var int
     */
    public $Id;
    /**
     * The name of the media subclass.
     *
     * @var string
     */
    public $MediaType;
    /**
     * An array of MediaRepresentation-derived objects, for example ImageMediaRepresentation, that each include download Urls for one or more media representations.
     *
     * @var MediaRepresentation[]
     */
    public $Representations;
    /**
     * The type of media in the library.
     *
     * @var string
     */
    public $Type;
}
