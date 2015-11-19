<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the estimated position in the search results if the specified bid value would be used for the specified keywords.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn337006(v=msads.90).aspx GetEstimatedPositionByKeywords Request Object
 * 
 * @uses Currency
 * @uses MatchType
 * @used-by BingAdsAdIntelligenceService::GetEstimatedPositionByKeywords
 */
final class GetEstimatedPositionByKeywordsRequest
{
    /**
     * An array of keywords for which you want to get the estimated position in the search results, based on the specified bid value.
     *
     * @var string[]
     */
    public $Keywords;
    /**
     * The maximum bid value to use to determine the estimated position in the search results.
     *
     * @var float
     */
    public $MaxBid;
    /**
     * The language used to help determine the country to use as the source of data for estimating the bids, if the PublisherCountries element is not specified.
     *
     * @var string
     */
    public $Language;
    /**
     * The country codes of the countries to use as the source of data for estimating the bids.
     *
     * @var string[]
     */
    public $PublisherCountries;
    /**
     * The monetary unit to use to calculate the cost estimates and suggested bid value.
     *
     * @var Currency
     */
    public $Currency;
    /**
     * An array of unique match types for which you want to get estimates.
     *
     * @var MatchType[]
     */
    public $MatchTypes;
    /**
     * The identifier of the campaign that owns the ad group specified in AdGroupId.
     *
     * @var int
     */
    public $CampaignId;
    public $AdgroupId;
}
