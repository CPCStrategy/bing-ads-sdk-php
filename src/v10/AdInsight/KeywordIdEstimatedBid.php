<?php

namespace BingAds\v10\AdInsight;

/**
 * Defines an object that contains the identifier of the keyword and the suggested bid value for the keyword and match type.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219295(v=msads.100).aspx KeywordIdEstimatedBid Data Object
 * 
 * @uses KeywordEstimatedBid
 * @used-by GetEstimatedBidByKeywordIdsResponse
 */
final class KeywordIdEstimatedBid
{
    /**
     * The identifier of the keyword to which the suggested bid applies.
     *
     * @var int
     */
    public $KeywordId;
    /**
     * An object that contains the keyword string and the suggested bid value for each match type.
     *
     * @var KeywordEstimatedBid
     */
    public $KeywordEstimatedBid;
}
