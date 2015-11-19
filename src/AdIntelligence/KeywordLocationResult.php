<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains the locations where users were located when they searched for the specified keyword using the specified type of device.
 *
 * @link http://msdn.microsoft.com/en-us/library/hh921735(v=msads.90).aspx KeywordLocationResult Data Object
 * 
 * @uses KeywordLocation
 * @used-by GetKeywordLocationsResponse
 */
final class KeywordLocationResult
{
    /**
     * The keyword.
     *
     * @var string
     */
    public $Keyword;
    /**
     * The type of device used by the user.
     *
     * @var string
     */
    public $Device;
    /**
     * An array of KeywordLocation objects that contains the users' geographical locations and the percentage of times that users searched for the keyword from that location.
     *
     * @var KeywordLocation[]
     */
    public $KeywordLocations;
}
