<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains a keyword and corresponding match types.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn320461(v=msads.90).aspx KeywordAndMatchType Data Object
 *
 * @uses MatchType
 * @used-by GetEstimatedBidByKeywordsRequest
 */
final class KeywordAndMatchType
{
    /**
     * The keyword text.
     *
     * @var string
     */
    public $KeywordText;
    /**
     * The corresponding match types for the keyword.
     *
     * @var MatchType[]
     */
    public $MatchTypes;
}
