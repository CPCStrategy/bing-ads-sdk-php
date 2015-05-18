<?php

namespace BingAds\Optimizer;

/**
 * Defines an object that contains a list of budget points for a campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn434660(v=msads.90).aspx CampaignBudgetLandscape Data Object
 *
 * @uses BudgetPoint
 * @used-by GetBudgetLandscapeResponse
 */
final class CampaignBudgetLandscape extends Opportunity
{
    /**
     * The date when data for budget points were most recently updated by the system.
     *
     * @var \DateTime
     */
    public $BaseDate;
    /**
     * The list of budget points, including budget point type and budget landscape points.
     *
     * @var BudgetPoint[]
     */
    public $BudgetPoints;
    /**
     * The identifier of the campaign corresponding to the list of budget points.
     *
     * @var int
     */
    public $CampaignId;
}
