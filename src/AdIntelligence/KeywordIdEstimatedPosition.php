<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains the identifier of a keyword and the estimated search results position for the keyword and match type.
 *
 * @link http://msdn.microsoft.com/en-us/library/gg986824(v=msads.90).aspx KeywordIdEstimatedPosition Data Object
 * 
 * @uses KeywordEstimatedPosition
 * @used-by GetEstimatedPositionByKeywordIdsResponse
 */
final class KeywordIdEstimatedPosition
{
    /**
     * The identifier of the keyword to which the estimated position applies.
     *
     * @var int
     */
    public $KeywordId;
    /**
     * An object that contains the keyword string and estimated position in the search results given the specified maximum bid.
     *
     * @var KeywordEstimatedPosition
     */
    public $KeywordEstimatedPosition;
}
