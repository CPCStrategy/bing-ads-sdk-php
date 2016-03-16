<?php

namespace BingAds\v10\AdInsight;

/**
 * Suggests keywords that could perform better than the specified keywords.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219311(v=msads.100).aspx SuggestKeywordsFromExistingKeywords Response Object
 * 
 * @uses KeywordSuggestion
 * @used-by BingAdsAdInsightService::SuggestKeywordsFromExistingKeywords
 */
final class SuggestKeywordsFromExistingKeywordsResponse
{
    public $KeywordSuggestions;
}
