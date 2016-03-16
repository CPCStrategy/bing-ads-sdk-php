<?php

namespace BingAds\Reporting;

/**
 * Defines the attributes and performance statistics columns that you can include in the SearchQueryPerformanceReportRequest.
 *
 * @link http://msdn.microsoft.com/en-us/library/ee703958(v=msads.90).aspx SearchQueryPerformanceReportColumn Value Set
 * 
 * @used-by SearchQueryPerformanceReportRequest
 */
final class SearchQueryPerformanceReportColumn
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
    /** The Bing Ads assigned identifier of an ad. */
    const AdId = 'AdId';
    /** The ad type. */
    const AdType = 'AdType';
    /** The destination URL attribute of the ad, keyword, or ad group criterion. */
    const DestinationUrl = 'DestinationUrl';
    /** The keyword bid match type. */
    const BidMatchType = 'BidMatchType';
    /** The match type used to deliver an ad. */
    const DeliveredMatchType = 'DeliveredMatchType';
    /** The campaign status. */
    const CampaignStatus = 'CampaignStatus';
    /** The ad status. */
    const AdStatus = 'AdStatus';
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
    /** The search term used by your potential audience. */
    const SearchQuery = 'SearchQuery';
    /** The keyword text. */
    const Keyword = 'Keyword';
    /** The name of the product target. */
    const ProductTarget = 'ProductTarget';
    /** The Bing Ads assigned identifier of an ad group criterion. */
    const AdGroupCriterionId = 'AdGroupCriterionId';
    /** The number of conversions. */
    const Conversions = 'Conversions';
    /** The conversion rate as a percentage. */
    const ConversionRate = 'ConversionRate';
    /** The cost per conversion. */
    const CostPerConversion = 'CostPerConversion';
    /** The ad group language. */
    const Language = 'Language';
    /** The Bing Ads assigned identifier of a keyword. */
    const KeywordId = 'KeywordId';
    /** The Network element of an AdGroup. */
    const Network = 'Network';
    /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
    const TopVsOther = 'TopVsOther';
    /** The device name attribute of a device OS target bid. */
    const DeviceType = 'DeviceType';
    /** The operating system of the device reported in the DeviceType column. */
    const DeviceOS = 'DeviceOS';
    /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
    const Assists = 'Assists';
    /** Cost information that is optionally provided by advertisers, including non-advertising costs, taxes, and shipping. */
    const ExtendedCost = 'ExtendedCost';
    /** The revenue optionally reported by the advertiser as a result of conversions. */
    const Revenue = 'Revenue';
    /** The return on ad spend (ROAS). */
    const ReturnOnAdSpend = 'ReturnOnAdSpend';
    /** The cost per assist. */
    const CostPerAssist = 'CostPerAssist';
    /** The revenue per conversion. */
    const RevenuePerConversion = 'RevenuePerConversion';
    /** The revenue per assist. */
    const RevenuePerAssist = 'RevenuePerAssist';
}
