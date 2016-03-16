<?php

namespace BingAds\v10\AdInsight;

/**
 * Defines an object that contains the locations where users were located when they searched for the specified keyword.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219299(v=msads.100).aspx KeywordLocationResult Data Object
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
     * An array of KeywordLocation objects that contains the users' geographical locations and the percentage of times that users searched for the keyword from that location.
     *
     * @var KeywordLocation[]
     */
    public $KeywordLocations;
}
