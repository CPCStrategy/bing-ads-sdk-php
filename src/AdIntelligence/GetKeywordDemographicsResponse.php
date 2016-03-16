<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the age and gender of users who have searched for the specified keywords.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn336994(v=msads.90).aspx GetKeywordDemographics Response Object
 * 
 * @uses KeywordDemographicResult
 * @used-by BingAdsAdIntelligenceService::GetKeywordDemographics
 */
final class GetKeywordDemographicsResponse
{
    /**
     * An array of KeywordDemographicResult objects.
     *
     * @var KeywordDemographicResult[]
     */
    public $KeywordDemographicResult;
}
