<?php

namespace BingAds\Optimizer;

/**
 * Defines an object that contains a suggested keyword and bid value.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj649133(v=msads.90).aspx KeywordOpportunity Data Object
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
     * The identifier of the campaign that owns the ad group.
     *
     * @var int
     */
    public $CampaignId;
    /**
     * An indicator of competitive bids for this keyword relative to all search keywords.
     *
     * @var float
     */
    public $Competition;
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
    /**
     * Broad match average CPC in the marketplace.
     *
     * @var float
     */
    public $AverageCPC;
    /**
     * Broad match average CTR in the marketplace.
     *
     * @var float
     */
    public $AverageCTR;
    /**
     * Broad match click share in the marketplace.
     *
     * @var float
     */
    public $ClickShare;
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
}
