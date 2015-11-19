<?php

namespace BingAds\AdInsight;

/**
 * Defines an object that contains the device, age and gender of the user who entered the search query, if known.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219283(v=msads.100).aspx KeywordDemographic Data Object
 * 
 * @used-by KeywordDemographicResult
 */
final class KeywordDemographic
{
    /**
     * The device of the user who entered the search query.
     *
     * @var string
     */
    public $Device;
    /**
     * The percentage of time that users 18 through 24 years of age searched for the keyword.
     *
     * @var float
     */
    public $Age18_24;
    /**
     * The percentage of time that users 25 through 34 years of age searched for the keyword.
     *
     * @var float
     */
    public $Age25_34;
    /**
     * The percentage of time that users 35 through 49 years of age searched for the keyword.
     *
     * @var float
     */
    public $Age35_49;
    /**
     * The percentage of time that users 50 through 64 years of age searched for the keyword.
     *
     * @var float
     */
    public $Age50_64;
    /**
     * The percentage of time that users 65 years of age or older searched for the keyword.
     *
     * @var float
     */
    public $Age65Plus;
    /**
     * Not used.
     *
     * @var float
     */
    public $AgeUnknown;
    /**
     * The percentage of time that female users searched for the keyword.
     *
     * @var float
     */
    public $Female;
    /**
     * The percentage of time that male users searched for the keyword.
     *
     * @var float
     */
    public $Male;
    /**
     * Not Used.
     *
     * @var float
     */
    public $GenderUnknown;
}
