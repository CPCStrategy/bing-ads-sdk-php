<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the age and gender of users who have searched for the specified keywords.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn336994(v=msads.90).aspx GetKeywordDemographics Request Object
 *
 * @used-by BingAdsAdIntelligenceService::GetKeywordDemographics
 */
final class GetKeywordDemographicsRequest
{
    /**
     * An array of keywords for which you want to get demographics data.
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
     * The country code of the country/region to use as the source of the demographics data.
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
}
