<?php

namespace BingAds\AdIntelligence;

/**
 * Suggests keywords that could perform better than the specified keywords.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn336990(v=msads.90).aspx SuggestKeywordsFromExistingKeywords Response Object
 * 
 * @uses KeywordSuggestion
 * @used-by BingAdsAdIntelligenceService::SuggestKeywordsFromExistingKeywords
 */
final class SuggestKeywordsFromExistingKeywordsResponse
{
    /**
     * An array of KeywordSuggestion objects.
     *
     * @var KeywordSuggestion[]
     */
    public $KeywordSuggestions;
}
