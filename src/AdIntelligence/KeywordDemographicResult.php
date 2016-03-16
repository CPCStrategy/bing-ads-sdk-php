<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains the keyword and percentage of users by age and gender (if known) who searched for the specified keyword on the specified device.
 *
 * @link http://msdn.microsoft.com/en-us/library/hh921732(v=msads.90).aspx KeywordDemographicResult Data Object
 * 
 * @uses KeywordDemographic
 * @used-by GetKeywordDemographicsResponse
 */
final class KeywordDemographicResult
{
    /**
     * The keyword.
     *
     * @var string
     */
    public $Keyword;
    /**
     * The type of device used by the user.
     *
     * @var string
     */
    public $Device;
    /**
     * An array of KeywordDemographic objects that contains the percentage of users by age and gender (if known) that searched for the keyword on the device.
     *
     * @var KeywordDemographic
     */
    public $KeywordDemographics;
}
