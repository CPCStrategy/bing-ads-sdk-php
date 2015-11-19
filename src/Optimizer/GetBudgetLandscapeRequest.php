<?php

namespace BingAds\Optimizer;

/**
 * Gets the campaign budget landscape and corresponding budget points for the specified campaign in an account.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn434657(v=msads.90).aspx GetBudgetLandscape Request Object
 * 
 * @used-by BingAdsOptimizerService::GetBudgetLandscape
 */
final class GetBudgetLandscapeRequest
{
    /**
     * The identifier of the account for which you want to discover a list of campaign budget suggestions.
     *
     * @var int
     */
    public $AccountId;
    /**
     * The identifier of the campaign for which you want to discover a list of campaign budget suggestions.
     *
     * @var int
     */
    public $CampaignId;
}
