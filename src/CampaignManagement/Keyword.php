<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a keyword.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671833(v=msads.90).aspx Keyword Data Object
 *
 * @uses Bid
 * @uses KeywordEditorialStatus
 * @uses KeyValuePairOfstringstring
 * @uses MatchType
 * @uses KeywordStatus
 * @used-by AddKeywordsRequest
 * @used-by GetKeywordsByAdGroupIdResponse
 * @used-by GetKeywordsByEditorialStatusResponse
 * @used-by GetKeywordsByIdsResponse
 * @used-by UpdateKeywordsRequest
 */
final class Keyword
{
    /**
     * The bid to use when the user's search term and the keyword match.
     *
     * @var Bid
     */
    public $Bid;
    /**
     * The URL of the webpage to take the user to when they click the ad.
     *
     * @var string
     */
    public $DestinationUrl;
    /**
     * The editorial review status of the keyword, which indicates whether the keyword is pending review, has been approved, or has been disapproved.
     *
     * @var KeywordEditorialStatus
     */
    public $EditorialStatus;
    /**
     * The list of key and value strings for forward compatibility.
     *
     * @var KeyValuePairOfstringstring[]
     */
    public $ForwardCompatibilityMap;
    /**
     * The system-generated identifier of the keyword.
     *
     * @var int
     */
    public $Id;
    /**
     * The type of match to compare the keyword and the user's search term.
     *
     * @var MatchType
     */
    public $MatchType;
    /**
     * The string to use as the substitution value in an ad if the ad's title, text, display URL, or destination URL contains the {Param1} dynamic substitution string.
     *
     * @var string
     */
    public $Param1;
    /**
     * The string to use as the substitution value in an ad if the title, text, display URL, or destination URL contains the {Param2} dynamic substitution string.
     *
     * @var string
     */
    public $Param2;
    /**
     * The string to use as the substitution value in an ad if the title, text, display URL, or destination URL contains the {Param3} dynamic substitution string.
     *
     * @var string
     */
    public $Param3;
    /**
     * The keyword's status.
     *
     * @var KeywordStatus
     */
    public $Status;
    /**
     * The keyword text.
     *
     * @var string
     */
    public $Text;
}
