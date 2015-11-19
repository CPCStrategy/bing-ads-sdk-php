<?php

namespace BingAds\AdInsight;

/**
 * Gets a list of keyword suggestions that are relevant to the specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219321(v=msads.100).aspx GetKeywordOpportunities Response Object
 * 
 * @uses KeywordOpportunity
 * @used-by BingAdsAdInsightService::GetKeywordOpportunities
 */
final class GetKeywordOpportunitiesResponse
{
    public $Opportunities;
}
