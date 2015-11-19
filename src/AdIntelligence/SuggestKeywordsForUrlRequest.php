<?php

namespace BingAds\AdIntelligence;

/**
 * Suggests the possible keywords for the content located at the specified URL.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn336991(v=msads.90).aspx SuggestKeywordsForUrl Request Object
 * 
 * @used-by BingAdsAdIntelligenceService::SuggestKeywordsForUrl
 */
final class SuggestKeywordsForUrlRequest
{
    /**
     * The URL of the webpage to scan for possible keywords.
     *
     * @var string
     */
    public $Url;
    /**
     * The language used by the website.
     *
     * @var string
     */
    public $Language;
    /**
     * A positive integer value that specifies the maximum number of keywords to return.
     *
     * @var int
     */
    public $MaxKeywords;
    /**
     * A filter value that limits the keywords that the service returns to those that have a confidence score that is greater than or equal to the specified score.
     *
     * @var float
     */
    public $MinConfidenceScore;
    /**
     * A value that determines whether the results exclude brand keywords.
     *
     * @var bool
     */
    public $ExcludeBrand;
}
