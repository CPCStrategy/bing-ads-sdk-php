<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the geographical locations of users who have searched for the specified keywords.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn336993(v=msads.90).aspx GetKeywordLocations Request Object
 *
 * @used-by BingAdsAdIntelligenceService::GetKeywordLocations
 */
final class GetKeywordLocationsRequest
{
    /**
     * An array of keywords for which you want to get geographical location information.
     *
     * @var string[]
     */
    public $Keywords;
    /**
     * The language in which the keywords are written.
     *
     * @var string
     */
    public $Language;
    /**
     * The country code of the country/region to use as the source of the location data.
     *
     * @var string
     */
    public $PublisherCountry;
    /**
     * A list of one or more of the following device types.
     *
     * @var string[]
     */
    public $Device;
    /**
     * The level at which to aggregate the geographical location data.
     *
     * @var int
     */
    public $Level;
    /**
     * The country from which the search originated.
     *
     * @var string
     */
    public $ParentCountry;
    /**
     * The maximum number of locations to return.
     *
     * @var int
     */
    public $MaxLocations;
}
