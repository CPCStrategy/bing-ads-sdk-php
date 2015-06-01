<?php

namespace BingAds\Optimizer;

/**
 * Gets a list of keyword suggestions that are relevant to the specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn376336(v=msads.90).aspx GetKeywordOpportunities Request Object
 *
 * @uses KeywordOpportunityType
 * @used-by BingAdsOptimizerService::GetKeywordOpportunities
 */
final class GetKeywordOpportunitiesRequest
{
    /**
     * The identifier of the account that owns the specified campaign.
     *
     * @var int
     */
    public $AccountId;
    /**
     * The identifier of the ad group to get keyword suggestions for.
     *
     * @var int
     */
    public $AdGroupId;
    /**
     * The identifier of the campaign that owns the specified ad group.
     *
     * @var int
     */
    public $CampaignId;
    /**
     * When set to true, the estimated impact elements are included in the KeywordOpportunity object.
     *
     * @var bool
     */
    public $IncludeEstimations;
    /**
     * Determines the type or types of keyword opportunities that you want.
     *
     * @var KeywordOpportunityType
     */
    public $OpportunityType;
}
