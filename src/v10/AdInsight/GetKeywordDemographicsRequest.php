<?php

namespace BingAds\v10\AdInsight;

/**
 * Gets the age and gender of users who have searched for the specified keywords.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219307(v=msads.100).aspx GetKeywordDemographics Request Object
 * 
 * @used-by BingAdsAdInsightService::GetKeywordDemographics
 */
final class GetKeywordDemographicsRequest
{
    public $Keywords;
    public $Language;
    public $PublisherCountry;
    public $Device;
}
