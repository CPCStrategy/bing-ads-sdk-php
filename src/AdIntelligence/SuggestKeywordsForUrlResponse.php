<?php

namespace BingAds\AdIntelligence;

/**
 * Suggests the possible keywords for the content located at the specified URL.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn336991(v=msads.90).aspx SuggestKeywordsForUrl Response Object
 *
 * @uses KeywordAndConfidence
 * @used-by BingAdsAdIntelligenceService::SuggestKeywordsForUrl
 */
final class SuggestKeywordsForUrlResponse
{
    /**
     * An array of KeywordAndConfidence objects that contains the possible keywords found in the content of the specified URL.
     *
     * @var KeywordAndConfidence[]
     */
    public $Keywords;
}
