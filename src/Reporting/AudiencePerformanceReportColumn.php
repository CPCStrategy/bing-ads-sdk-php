<?php

namespace BingAds\Reporting;

/**
 * Defines the attributes and performance statistics columns that you can include in the AudiencePerformanceReportRequest.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt604701(v=msads.90).aspx AudiencePerformanceReportColumn Value Set
 * 
 * @used-by AudiencePerformanceReportRequest
 */
final class AudiencePerformanceReportColumn
{
    /** The account name. */
    const AccountName = 'AccountName';
    /** The Bing Ads assigned number of an account. */
    const AccountNumber = 'AccountNumber';
    /** The Bing Ads assigned identifier of an account. */
    const AccountId = 'AccountId';
    /** The time period of each report row. */
    const TimePeriod = 'TimePeriod';
    /** The campaign name. */
    const CampaignName = 'CampaignName';
    /** The Bing Ads assigned identifier of a campaign. */
    const CampaignId = 'CampaignId';
    /** The ad group name. */
    const AdGroupName = 'AdGroupName';
    /** The Bing Ads assigned identifier of an ad group. */
    const AdGroupId = 'AdGroupId';
    /** The Bing Ads assigned identifier of an audience remarketing list. */
    const AudienceId = 'AudienceId';
    /** The audience remarketing list name. */
    const AudienceName = 'AudienceName';
    /** The status of the association between the ad group and remarketing list, which indicates whether ads are eligible to display. */
    const AssociationStatus = 'AssociationStatus';
    /** This attribute reflects the current value of your ad group's audience bid adjustment. */
    const BidAdjustment = 'BidAdjustment';
    /** This attribute reflects the current value of your ad group's audience targeting setting. */
    const TargetingSetting = 'TargetingSetting';
    /** The number of times an ad has been displayed on search results pages. */
    const Impressions = 'Impressions';
    /** The number of times that the ads in the account were clicked. */
    const Clicks = 'Clicks';
    /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
    const Ctr = 'Ctr';
    /** The average cost per click (CPC). */
    const AverageCpc = 'AverageCpc';
    /** The cost per click (CPC) summed for each click. */
    const Spend = 'Spend';
    /** The average position of the ad on a webpage. */
    const AveragePosition = 'AveragePosition';
    /** The number of conversions. */
    const Conversions = 'Conversions';
    /** The conversion rate as a percentage. */
    const ConversionRate = 'ConversionRate';
    /** The cost per conversion. */
    const CostPerConversion = 'CostPerConversion';
    /** The revenue optionally reported by the advertiser as a result of conversions. */
    const Revenue = 'Revenue';
    /** The return on ad spend (ROAS). */
    const ReturnOnAdSpend = 'ReturnOnAdSpend';
    /** The revenue per conversion. */
    const RevenuePerConversion = 'RevenuePerConversion';
}
