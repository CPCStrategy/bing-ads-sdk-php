<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains a list of estimated clicks, cost, and impressions from 1 to 7 days for the keyword identifier given the suggested bid.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn631946(v=msads.90).aspx KeywordBidLandscape Data Object
 * 
 * @uses DayMonthAndYear
 * @uses BidLandscapePoint
 * @used-by KeywordIdBidEstimation
 * @used-by GetBidLandscapeByKeywordIdsResponse
 */
final class KeywordBidLandscape
{
    /**
     * The keyword identifier.
     *
     * @var int
     */
    public $KeywordId;
    /**
     * The first date used to calculate the bid landscape.
     *
     * @var DayMonthAndYear
     */
    public $StartDate;
    /**
     * The most recent date used to calculate the bid landscape.
     *
     * @var DayMonthAndYear
     */
    public $EndDate;
    /**
     * The list of the total estimated clicks, cost, and impressions from StartDate to EndDate given the suggested bid.
     *
     * @var BidLandscapePoint[]
     */
    public $BidLandscapePoints;
}
