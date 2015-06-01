<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains the location and the percentage of time that a user in the specified location entered a search query with the specified keyword.
 *
 * @link http://msdn.microsoft.com/en-us/library/hh921736(v=msads.90).aspx KeywordLocation Data Object
 *
 * @used-by KeywordLocationResult
 */
final class KeywordLocation
{
    /**
     * The country, state, metropolitan area, or city where users searched for the specified keyword.
     *
     * @var string
     */
    public $Location;
    /**
     * The percentage of time that users searched for the keyword from the location.
     *
     * @var float
     */
    public $Percentage;
}
