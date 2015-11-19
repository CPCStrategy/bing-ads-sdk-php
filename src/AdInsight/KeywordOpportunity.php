<?php

namespace BingAds\AdInsight;

/**
 * Defines an object that contains a suggested keyword and bid value.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219316(v=msads.100).aspx KeywordOpportunity Data Object
 * 
 * @used-by GetKeywordOpportunitiesResponse
 */
class KeywordOpportunity extends Opportunity
{
    /**
     * The identifier of the ad group to apply the suggested keyword to.
     *
     * @var int
     */
    public $AdGroupId;
    /**
     * The name of the ad group to apply the suggested keyword to.
     *
     * @var string
     */
    public $AdGroupName;
    /**
     * The identifier of the campaign that owns the ad group.
     *
     * @var int
     */
    public $CampaignId;
    /**
     * The name of the campaign that owns the ad group.
     *
     * @var string
     */
    public $CampaignName;
    /**
     * An indicator of competitive bids for this keyword relative to all search keywords.
     *
     * @var float
     */
    public $Competition;
    /**
     * Estimated increase in clicks if the opportunity is applied.
     *
     * @var float
     */
    public $EstimatedIncreaseInClicks;
    /**
     * Estimated increase in cost if the opportunity is applied.
     *
     * @var float
     */
    public $EstimatedIncreaseInCost;
    /**
     * Estimated increase in impressions if the opportunity is applied.
     *
     * @var int
     */
    public $EstimatedIncreaseInImpressions;
    /**
     * The match type that the suggested bid applies to.
     *
     * @var int
     */
    public $MatchType;
    /**
     * The estimated monthly volume of user search queries that may match the suggested keyword for the corresponding MatchType element.
     *
     * @var int
     */
    public $MonthlySearches;
    /**
     * The suggested bid that may result in your ads serving on the first page of the search query results.
     *
     * @var float
     */
    public $SuggestedBid;
    /**
     * The suggested keyword.
     *
     * @var string
     */
    public $SuggestedKeyword;
}
