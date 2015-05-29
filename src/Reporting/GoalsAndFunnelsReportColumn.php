<?php

namespace BingAds\Reporting;

/**
 * Defines the attributes and performance statistics columns that you can include in the GoalsAndFunnelsReportRequest.
 *
 * @link http://msdn.microsoft.com/en-us/library/gg262845(v=msads.90).aspx GoalsAndFunnelsReportColumn Value Set
 *
 * @used-by GoalsAndFunnelsReportRequest
 */
final class GoalsAndFunnelsReportColumn
{
    /** The Name element of an Account. */
    const ACCOUNT_NAME = 'AccountName';
    /** The Number element of an Account. */
    const ACCOUNT_NUMBER = 'AccountNumber';
    /** The Id element of an Account. */
    const ACCOUNT_ID = 'AccountId';
    /** The time period of each report row. */
    const TIME_PERIOD = 'TimePeriod';
    /** The Name element of a Campaign. */
    const CAMPAIGN_NAME = 'CampaignName';
    /** The Id element of a Campaign. */
    const CAMPAIGN_ID = 'CampaignId';
    /** The Name element of an AdGroup. */
    const AD_GROUP_NAME = 'AdGroupName';
    /** The Id element of an AdGroup. */
    const AD_GROUP_ID = 'AdGroupId';
    /** The Text element of a Keyword. */
    const KEYWORD = 'Keyword';
    /** The Id element of a Keyword. */
    const KEYWORD_ID = 'KeywordId';
    /** The name of your event tracking or campaign analytics goal. */
    const GOAL = 'Goal';
    /** The number of times that a user entered step 1 of the funnel. */
    const STEP1_COUNT = 'Step1Count';
    /** The number of times that a user entered step 2 of the funnel. */
    const STEP2_COUNT = 'Step2Count';
    /** The number of times that a user entered step 3 of the funnel. */
    const STEP3_COUNT = 'Step3Count';
    /** The number of times that a user entered step 4 of the funnel. */
    const STEP4_COUNT = 'Step4Count';
    /** The number of times that a user entered step 5 of the funnel. */
    const STEP5_COUNT = 'Step5Count';
    /** The number of conversions. */
    const CONVERSIONS = 'Conversions';
    /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
    const ASSISTS = 'Assists';
    /** The funnel conversion rate is the percent of conversions completed by users who at minimum visited the webpage corresponding to step 1 of your goal. */
    const FUNNEL_CONVERSION_RATE = 'FunnelConversionRate';
    /** The cost per click (CPC) summed for each click. */
    const SPEND = 'Spend';
    /** The revenue optionally reported by the advertiser as a result of conversions. */
    const REVENUE = 'Revenue';
    /** The return on ad spend (ROAS). */
    const RETURN_ON_AD_SPEND = 'ReturnOnAdSpend';
    /** Cost information that is optionally provided by advertisers, including non-advertising costs, taxes, and shipping. */
    const EXTENDED_COST = 'ExtendedCost';
    /** This is a unique ID that identifies the goal. */
    const GOAL_ID = 'GoalId';
}
