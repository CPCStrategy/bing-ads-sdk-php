<?php

namespace BingAds\Reporting;

/**
 * Defines the attributes and performance statistics columns that you can include in the AdDynamicTextPerformanceReportRequest.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671878(v=msads.90).aspx AdDynamicTextPerformanceReportColumn Value Set
 * 
 * @used-by AdDynamicTextPerformanceReportRequest
 */
final class AdDynamicTextPerformanceReportColumn
{
    /** The account name. */
    const AccountName = 'AccountName';
    /** The Bing Ads assigned identifier of an account. */
    const AccountId = 'AccountId';
    /** The Bing Ads assigned number of an account. */
    const AccountNumber = 'AccountNumber';
    /** The time period of each report row. */
    const TimePeriod = 'TimePeriod';
    /** The ad group name. */
    const AdGroupName = 'AdGroupName';
    /** The Bing Ads assigned identifier of an ad group. */
    const AdGroupId = 'AdGroupId';
    /** The keyword text. */
    const Keyword = 'Keyword';
    const AdId = 'AdId';
    /** The ad title. */
    const AdTitle = 'AdTitle';
    /** The ad type. */
    const AdType = 'AdType';
    /** The destination URL attribute of the ad, keyword, or ad group criterion. */
    const DestinationUrl = 'DestinationUrl';
    /** The Param1 element of a Keyword or BiddableAdGroupCriterion. */
    const Param1 = 'Param1';
    /** The Param2 element of a Keyword or BiddableAdGroupCriterion. */
    const Param2 = 'Param2';
    /** The Param3 element of a Keyword or BiddableAdGroupCriterion. */
    const Param3 = 'Param3';
    /** The account currency type. */
    const CurrencyCode = 'CurrencyCode';
    /** The ad distribution attribute of an ad group. */
    const AdDistribution = 'AdDistribution';
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
    /** The average of the cost-per-thousand impressions of the ads. */
    const AverageCpm = 'AverageCpm';
    /** The PricingModel element of an AdGroup. */
    const PricingModel = 'PricingModel';
    /** The device name attribute of a device OS target bid. */
    const DeviceType = 'DeviceType';
    /** The ad group language. */
    const Language = 'Language';
}
