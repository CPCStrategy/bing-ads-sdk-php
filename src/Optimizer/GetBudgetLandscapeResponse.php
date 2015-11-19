<?php

namespace BingAds\Optimizer;

/**
 * Gets the campaign budget landscape and corresponding budget points for the specified campaign in an account.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn434657(v=msads.90).aspx GetBudgetLandscape Response Object
 *
 * @uses CampaignBudgetLandscape
 * @used-by BingAdsOptimizerService::GetBudgetLandscape
 */
final class GetBudgetLandscapeResponse
{
    /**
     * A list of CampaignBudgetLandscape objects that identify one or more campaigns with suggested budget points.
     *
     * @var CampaignBudgetLandscape[]
     */
    public $CampaignBudgetLandscapes;
}
