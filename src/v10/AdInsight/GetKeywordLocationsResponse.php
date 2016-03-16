<?php

namespace BingAds\v10\AdInsight;

/**
 * Gets the geographical locations of users who have searched for the specified keywords.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219328(v=msads.100).aspx GetKeywordLocations Response Object
 * 
 * @uses KeywordLocationResult
 * @used-by BingAdsAdInsightService::GetKeywordLocations
 */
final class GetKeywordLocationsResponse
{
    public $KeywordLocationResult;
}
