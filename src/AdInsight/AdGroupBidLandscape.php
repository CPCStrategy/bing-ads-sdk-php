<?php

namespace BingAds\AdInsight;

/**
 * Defines an object that contains a list of estimated clicks, cost, and impressions from 1 to 7 days for the ad group identifier given the suggested bid.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219312(v=msads.100).aspx AdGroupBidLandscape Data Object
 * 
 * @uses AdGroupBidLandscapeType
 * @uses DayMonthAndYear
 * @uses BidLandscapePoint
 * @used-by GetBidLandscapeByAdGroupIdsResponse
 */
final class AdGroupBidLandscape
{
    /**
     * The ad group identifier.
     *
     * @var int
     */
    public $AdGroupId;
    /**
     * Indicates whether all or a subset of an ad group's existing keywords were used to determine the bid landscape.
     *
     * @var AdGroupBidLandscapeType
     */
    public $AdGroupBidLandscapeType;
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
