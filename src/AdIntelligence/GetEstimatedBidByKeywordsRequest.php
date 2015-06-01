<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the estimated bid value of one or more keywords that could result in an ad appearing in the targeted position in the search results.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn336987(v=msads.90).aspx GetEstimatedBidByKeywords Request Object
 *
 * @uses KeywordAndMatchType
 * @uses TargetAdPosition
 * @uses Currency
 * @used-by BingAdsAdIntelligenceService::GetEstimatedBidByKeywords
 */
final class GetEstimatedBidByKeywordsRequest
{
    /**
     * A list of KeywordAndMatchType objects for which you want to get suggested bid values.
     *
     * @var KeywordAndMatchType[]
     */
    public $Keywords;
    /**
     * The position where you want your ads to appear in the search results.
     *
     * @var TargetAdPosition
     */
    public $TargetPositionForAds;
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
     * The identifier of the campaign that owns the ad group specified in AdGroupId.
     *
     * @var int
     */
    public $CampaignId;
    public $AdgroupId;
    /**
     * Determines whether to return estimates for keyword level bids, ad group level bids, or both.
     *
     * @var int
     */
    public $GetBidsAtLevel;
}
