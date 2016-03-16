<?php

namespace BingAds\Optimizer;

/**
 * Gets the keyword bid opportunities of the specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn376337(v=msads.90).aspx GetBidOpportunities Request Object
 * 
 * @uses BidOpportunityType
 * @used-by BingAdsOptimizerService::GetBidOpportunities
 */
final class GetBidOpportunitiesRequest
{
    /**
     * The identifier of the account that owns the campaign specified in the CampaignId element.
     *
     * @var int
     */
    public $AccountId;
    /**
     * The identifier of the ad group for which you want to determine keyword bid opportunities.
     *
     * @var int
     */
    public $AdGroupId;
    /**
     * The identifier of the campaign that owns the ad group specified in the AdGroupId element.
     *
     * @var int
     */
    public $CampaignId;
    /**
     * Determines the type or types of bid opportunities corresponding to your ad position goals.
     *
     * @var BidOpportunityType
     */
    public $OpportunityType;
}
