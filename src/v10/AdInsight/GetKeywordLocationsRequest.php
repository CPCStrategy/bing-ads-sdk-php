<?php

namespace BingAds\v10\AdInsight;

/**
 * Gets the geographical locations of users who have searched for the specified keywords.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219328(v=msads.100).aspx GetKeywordLocations Request Object
 * 
 * @used-by BingAdsAdInsightService::GetKeywordLocations
 */
final class GetKeywordLocationsRequest
{
    public $Keywords;
    public $Language;
    public $PublisherCountry;
    public $Device;
    public $Level;
    public $ParentCountry;
    public $MaxLocations;
}
