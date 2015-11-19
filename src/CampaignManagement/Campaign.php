<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb672054(v=msads.100).aspx Campaign Data Object
 * 
 * @uses BudgetLimitType
 * @uses KeyValuePairOfstringstring
 * @uses CampaignStatus
 * @uses CustomParameters
 * @uses CampaignType
 * @uses Setting
 * @used-by AddCampaignsRequest
 * @used-by GetCampaignsByAccountIdResponse
 * @used-by GetCampaignsByIdsResponse
 * @used-by UpdateCampaignsRequest
 */
final class Campaign
{
    public $BudgetType;
    public $DailyBudget;
    public $DaylightSaving;
    public $Description;
    public $ForwardCompatibilityMap;
    public $Id;
    public $MonthlyBudget;
    public $Name;
    public $NativeBidAdjustment;
    public $Status;
    public $TimeZone;
    public $TrackingUrlTemplate;
    public $UrlCustomParameters;
    public $CampaignType;
    public $Settings;
}
