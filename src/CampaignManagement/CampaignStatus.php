<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible status values of a campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb672025(v=msads.90).aspx CampaignStatus Value Set
 *
 * @used-by Campaign
 */
final class CampaignStatus
{
    /** The campaign is active, which indicates that the campaign's ads can be served. */
    const ACTIVE = 'Active';
    /** The campaign is paused, which indicates that the campaign's ads will not serve. */
    const PAUSED = 'Paused';
    /** The campaign is paused, which indicates that the campaign's ads will not serve. */
    const BUDGET_PAUSED = 'BudgetPaused';
    /** The campaign is paused, which indicates that the campaign's ads will not serve. */
    const BUDGET_AND_MANUAL_PAUSED = 'BudgetAndManualPaused';
    /** The campaign is deleted. */
    const DELETED = 'Deleted';
    /** Your campaign has been suspended and no ads are eligible for delivery because of potentially fraudulent activity. */
    const SUSPENDED = 'Suspended';
}
