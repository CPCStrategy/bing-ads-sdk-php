<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible match types for a keyword bid.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn249974(v=msads.90).aspx MatchType Value Set
 *
 * @used-by Keyword
 * @used-by NegativeKeyword
 */
final class MatchType
{
    /** The keyword match type is Exact. */
    const Exact = 'Exact';
    /** The keyword match type is Phrase. */
    const Phrase = 'Phrase';
    /** The keyword match type is Broad. */
    const Broad = 'Broad';
    /** The keyword match type is Content. */
    const Content = 'Content';
}
