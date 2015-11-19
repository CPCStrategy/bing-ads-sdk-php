<?php

namespace BingAds\AdInsight;

/**
 * Suggests the possible keywords for the content located at the specified URL.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219319(v=msads.100).aspx SuggestKeywordsForUrl Response Object
 * 
 * @uses KeywordAndConfidence
 * @used-by BingAdsAdInsightService::SuggestKeywordsForUrl
 */
final class SuggestKeywordsForUrlResponse
{
    public $Keywords;
}
