<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb672054(v=msads.90).aspx Campaign Data Object
 *
 * @uses BudgetLimitType
 * @uses KeyValuePairOfstringstring
 * @uses CampaignStatus
 * @uses CampaignType
 * @uses Setting
 * @used-by AddCampaignsRequest
 * @used-by GetCampaignsByAccountIdResponse
 * @used-by GetCampaignsByIdsResponse
 * @used-by UpdateCampaignsRequest
 */
final class Campaign
{
    /**
     * The budget type determines whether the campaign uses a daily budget or a monthly budget, and how the budget is spent.
     *
     * @var BudgetLimitType
     */
    public $BudgetType;
    /**
     * Conversion tracking is no longer supported at the campaign level.
     *
     * @var bool
     */
    public $ConversionTrackingEnabled;
    /**
     * The amount to spend daily on the campaign.
     *
     * @var float
     */
    public $DailyBudget;
    /**
     * Determines whether daylight-saving time is enabled.
     *
     * @var bool
     */
    public $DaylightSaving;
    /**
     * The description of the campaign.
     *
     * @var string
     */
    public $Description;
    /**
     * The following list of key and value strings are available for forward compatibility.
     *
     * @var KeyValuePairOfstringstring[]
     */
    public $ForwardCompatibilityMap;
    /**
     * The system-generated identifier of the campaign.
     *
     * @var int
     */
    public $Id;
    /**
     * The monthly budget of the campaign.
     *
     * @var float
     */
    public $MonthlyBudget;
    /**
     * The name of the campaign.
     *
     * @var string
     */
    public $Name;
    /**
     * The status of the campaign.
     *
     * @var CampaignStatus
     */
    public $Status;
    /**
     * The time zone where the campaign operates.
     *
     * @var string
     */
    public $TimeZone;
    /**
     * The campaign type determines whether the campaign is a Bing Shopping campaign or a Search & Content campaign.
     *
     * @var CampaignType
     */
    public $CampaignType;
    public $Settings;
}
