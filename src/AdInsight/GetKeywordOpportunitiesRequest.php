<?php

namespace BingAds\AdInsight;

/**
 * Gets a list of keyword suggestions that are relevant to the specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219321(v=msads.100).aspx GetKeywordOpportunities Request Object
 * 
 * @uses KeywordOpportunityType
 * @used-by BingAdsAdInsightService::GetKeywordOpportunities
 */
final class GetKeywordOpportunitiesRequest
{
    public $AdGroupId;
    public $CampaignId;
    public $OpportunityType;
}
