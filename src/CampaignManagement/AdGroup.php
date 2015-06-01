<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671956(v=msads.90).aspx AdGroup Data Object
 *
 * @uses AdDistribution
 * @uses AdRotation
 * @uses BiddingModel
 * @uses Bid
 * @uses Date
 * @uses KeyValuePairOfstringstring
 * @uses Network
 * @uses PricingModel
 * @uses AdGroupStatus
 * @used-by AddAdGroupsRequest
 * @used-by GetAdGroupsByCampaignIdResponse
 * @used-by GetAdGroupsByIdsResponse
 * @used-by UpdateAdGroupsRequest
 */
final class AdGroup
{
    /**
     * Determines whether the ads within this ad group will be displayed on the content distribution channel, search distribution channel, or both.
     *
     * @var AdDistribution
     */
    public $AdDistribution;
    /**
     * Determines the ad rotation type.
     *
     * @var AdRotation
     */
    public $AdRotation;
    /**
     * Determines whether the ad group bids on keyword matches or site placement matches.
     *
     * @var BiddingModel
     */
    public $BiddingModel;
    /**
     * The bid to use when the user's query and the ad group's keywords match by using a broad match comparison.
     *
     * @var Bid
     */
    public $BroadMatchBid;
    /**
     * The bid to use when the keywords that the service extracts from the content page and the ad group's keywords match by using an exact match comparison.
     *
     * @var Bid
     */
    public $ContentMatchBid;
    /**
     * The date that the ads in the ad group will expire.
     *
     * @var Date
     */
    public $EndDate;
    /**
     * The bid to use when the user's query and the ad group's keywords match by using an exact match comparison.
     *
     * @var Bid
     */
    public $ExactMatchBid;
    /**
     * The list of key and value strings for forward compatibility.
     *
     * @var KeyValuePairOfstringstring[]
     */
    public $ForwardCompatibilityMap;
    /**
     * The system generated identifier of the ad group.
     *
     * @var int
     */
    public $Id;
    /**
     * The language of the ads and keywords in the ad group.
     *
     * @var string
     */
    public $Language;
    /**
     * The name of the ad group.
     *
     * @var string
     */
    public $Name;
    /**
     * The search networks where you want your ads to display.
     *
     * @var Network
     */
    public $Network;
    /**
     * The bid value to use when the user's query and the ad group's keywords match by using a phrase match.
     *
     * @var Bid
     */
    public $PhraseMatchBid;
    /**
     * You can specify a pricing model based on cost per click (CPC) or cost per 1000 impressions (CPM).
     *
     * @var PricingModel
     */
    public $PricingModel;
    /**
     * The date that the ads in the ad group can begin serving; otherwise, the service can begin serving the ads in the ad group the day that the ad group becomes active.
     *
     * @var Date
     */
    public $StartDate;
    /**
     * The status of the ad group.
     *
     * @var AdGroupStatus
     */
    public $Status;
}
