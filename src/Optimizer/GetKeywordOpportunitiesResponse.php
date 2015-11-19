<?php

namespace BingAds\Optimizer;

/**
 * Gets a list of keyword suggestions that are relevant to the specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn376336(v=msads.90).aspx GetKeywordOpportunities Response Object
 *
 * @uses KeywordOpportunity
 * @used-by BingAdsOptimizerService::GetKeywordOpportunities
 */
final class GetKeywordOpportunitiesResponse
{
    /**
     * A list of KeywordOpportunity objects that identifies a suggested keyword and bid value.
     *
     * @var KeywordOpportunity[]
     */
    public $Opportunities;
}
