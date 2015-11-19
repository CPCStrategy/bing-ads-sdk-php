<?php

namespace BingAds\AdInsight;

/**
 * Gets the age and gender of users who have searched for the specified keywords.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219307(v=msads.100).aspx GetKeywordDemographics Response Object
 * 
 * @uses KeywordDemographicResult
 * @used-by BingAdsAdInsightService::GetKeywordDemographics
 */
final class GetKeywordDemographicsResponse
{
    public $KeywordDemographicResult;
}
