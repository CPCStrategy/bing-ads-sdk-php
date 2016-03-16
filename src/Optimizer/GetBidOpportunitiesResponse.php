<?php

namespace BingAds\Optimizer;

/**
 * Gets the keyword bid opportunities of the specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn376337(v=msads.90).aspx GetBidOpportunities Response Object
 * 
 * @uses BidOpportunity
 * @used-by BingAdsOptimizerService::GetBidOpportunities
 */
final class GetBidOpportunitiesResponse
{
    /**
     * An array of BidOpportunity objects that identifies the keywords whose clicks and impressions may increase if you were to apply the suggested match-type bid value.
     *
     * @var BidOpportunity[]
     */
    public $Opportunities;
}
