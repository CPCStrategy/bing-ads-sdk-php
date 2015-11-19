<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains the keyword and the estimated position in the search results for each match type.
 *
 * @link http://msdn.microsoft.com/en-us/library/gg986826(v=msads.90).aspx KeywordEstimatedPosition Data Object
 *
 * @uses EstimatedPositionAndTraffic
 * @used-by KeywordIdEstimatedPosition
 * @used-by GetEstimatedPositionByKeywordsResponse
 */
final class KeywordEstimatedPosition
{
    /**
     * The keyword to which the estimates apply.
     *
     * @var string
     */
    public $Keyword;
    /**
     * An array of EstimatedPositionAndTraffic objects that contains the position in the search results corresponding to the specified maximum bid.
     *
     * @var EstimatedPositionAndTraffic[]
     */
    public $EstimatedPositions;
}
