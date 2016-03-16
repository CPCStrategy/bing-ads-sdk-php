<?php

namespace BingAds\v10\AdInsight;

/**
 * Suggests the possible keywords for the content located at the specified URL.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219319(v=msads.100).aspx SuggestKeywordsForUrl Request Object
 * 
 * @used-by BingAdsAdInsightService::SuggestKeywordsForUrl
 */
final class SuggestKeywordsForUrlRequest
{
    public $Url;
    public $Language;
    public $MaxKeywords;
    public $MinConfidenceScore;
    public $ExcludeBrand;
}
