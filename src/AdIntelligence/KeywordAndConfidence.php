<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains a suggested keyword and a confidence score.
 *
 * @link http://msdn.microsoft.com/en-us/library/gg670952(v=msads.90).aspx KeywordAndConfidence Data Object
 * 
 * @used-by KeywordSuggestion
 * @used-by SuggestKeywordsForUrlResponse
 */
final class KeywordAndConfidence
{
    /**
     * The suggested keyword.
     *
     * @var string
     */
    public $SuggestedKeyword;
    /**
     * A score from 0.
     *
     * @var float
     */
    public $ConfidenceScore;
}
