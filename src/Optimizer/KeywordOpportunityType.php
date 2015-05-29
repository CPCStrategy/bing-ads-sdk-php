<?php

namespace BingAds\Optimizer;

/**
 * Defines the possible keyword opportunity types you can request when calling GetKeywordOpportunities.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn766184(v=msads.90).aspx KeywordOpportunityType Value Set
 *
 * @used-by GetKeywordOpportunitiesRequest
 */
final class KeywordOpportunityType
{
    /** The keyword opportunity will be suggested based on the marketplace impact of adding keywords with the broad match type. */
    const BROAD_MATCH = 'BroadMatch';
    /** The keyword opportunity will be suggested based on the full context of the campaign, including existing keywords, landing page, and ad copy. */
    const CAMPAIGN_CONTEXT = 'CampaignContext';
}
