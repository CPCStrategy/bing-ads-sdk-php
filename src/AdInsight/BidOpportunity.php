<?php

namespace BingAds\AdInsight;

/**
 * Defines an object that contains the suggested bid with estimated clicks and impressions opportunities.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219336(v=msads.100).aspx BidOpportunity Data Object
 * 
 * @used-by GetBidOpportunitiesResponse
 */
final class BidOpportunity extends Opportunity
{
    /**
     * The identifier of the ad group that owns the keyword.
     *
     * @var int
     */
    public $AdGroupId;
    /**
     * The identifier of the campaign for the ad group that owns the keyword.
     *
     * @var int
     */
    public $CampaignId;
    /**
     * The current keyword bid amount specified for the match type in the MatchType element.
     *
     * @var float
     */
    public $CurrentBid;
    /**
     * The estimated clicks opportunities corresponding to the suggested bid.
     *
     * @var float
     */
    public $EstimatedIncreaseInClicks;
    /**
     * The estimated increase in spend corresponding to the suggested bid.
     *
     * @var float
     */
    public $EstimatedIncreaseInCost;
    /**
     * The estimated impressions opportunities corresponding to the suggested bid.
     *
     * @var int
     */
    public $EstimatedIncreaseInImpressions;
    /**
     * The identifier of the keyword to which the bid opportunity applies.
     *
     * @var int
     */
    public $KeywordId;
    /**
     * The match type to which the suggested bid value applies.
     *
     * @var string
     */
    public $MatchType;
    /**
     * The suggested bid based on the last 7 days of performance history for the corresponding ad group.
     *
     * @var float
     */
    public $SuggestedBid;
}
