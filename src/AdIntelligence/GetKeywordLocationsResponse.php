<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the geographical locations of users who have searched for the specified keywords.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn336993(v=msads.90).aspx GetKeywordLocations Response Object
 * 
 * @uses KeywordLocationResult
 * @used-by BingAdsAdIntelligenceService::GetKeywordLocations
 */
final class GetKeywordLocationsResponse
{
    /**
     * An array of KeywordLocationResult objects.
     *
     * @var KeywordLocationResult[]
     */
    public $KeywordLocationResult;
}
