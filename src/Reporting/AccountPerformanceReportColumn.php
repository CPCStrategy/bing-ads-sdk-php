<?php

namespace BingAds\Reporting;

/**
 * Defines the attributes and performance statistics columns that you can include in the AccountPerformanceReportRequest.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671947(v=msads.90).aspx AccountPerformanceReportColumn Value Set
 * 
 * @used-by AccountPerformanceReportRequest
 */
final class AccountPerformanceReportColumn
{
    /** The Name element of an Account. */
    const AccountName = 'AccountName';
    /** The Number element of an Account. */
    const AccountNumber = 'AccountNumber';
    /** The Id element of an Account. */
    const AccountId = 'AccountId';
    /** The time period of each report row. */
    const TimePeriod = 'TimePeriod';
    /** The CurrencyType element of an Account. */
    const CurrencyCode = 'CurrencyCode';
    /** The AdDistribution element of an AdGroup. */
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
    /** The number of low-quality clicks. */
    const LowQualityClicks = 'LowQualityClicks';
    /** The low-quality clicks as a percentage. */
    const LowQualityClicksPercent = 'LowQualityClicksPercent';
    /** The number of impressions that result from low-quality keyword searches. */
    const LowQualityImpressions = 'LowQualityImpressions';
    /** The low-quality impressions as a percentage. */
    const LowQualityImpressionsPercent = 'LowQualityImpressionsPercent';
    /** The number of conversions that originate from low-quality clicks. */
    const LowQualityConversions = 'LowQualityConversions';
    /** The low-quality conversion rate as a percentage. */
    const LowQualityConversionRate = 'LowQualityConversionRate';
    /** The average of the cost-per-thousand impressions of the ads. */
    const AverageCpm = 'AverageCpm';
    /** The DeviceName element of a DeviceOSTargetBid. */
    const DeviceType = 'DeviceType';
    /** The operating system of the device reported in the DeviceType column. */
    const DeviceOS = 'DeviceOS';
    /** The percentage of time your ads were displayed to users who searched by keywords that matched your keywords and targeting selections. */
    const ImpressionSharePercent = 'ImpressionSharePercent';
    /** The percentage of time your ads would have been displayed to users, but were not because of a budget shortfall. */
    const ImpressionLostToBudgetPercent = 'ImpressionLostToBudgetPercent';
    /** The percentage of time your ads would have been displayed to users, but were not because your ads ranked too low in the auction. */
    const ImpressionLostToRankPercent = 'ImpressionLostToRankPercent';
    /** The percentage of time your ads would have been displayed to users, but were not because your bid was too low or your bid and quality score was below minimum thresholds, which prevented you from entering the auction. */
    const ImpressionLostToBidPercent = 'ImpressionLostToBidPercent';
    /** The percentage of time your ads would have been displayed to users, but were not due to one or more of the following reasons. */
    const ImpressionLostToLandingPageRelevancePercent = 'ImpressionLostToLandingPageRelevancePercent';
    /** The percentage of time your ads would have been displayed to users, but were not because your ad copy was not relevant to the user's search query. */
    const ImpressionLostToKeywordRelevancePercent = 'ImpressionLostToKeywordRelevancePercent';
    /** The number of times your tracked number was shown on all devices. */
    const PhoneImpressions = 'PhoneImpressions';
    /** The number of total calls to the tracked phone number that showed with your ad. */
    const PhoneCalls = 'PhoneCalls';
    /** The number of calls dialed manually from any device to the tracked phone number. */
    const ManualCalls = 'ManualCalls';
    /** The number of phone calls initiated by clicks. */
    const ClickCalls = 'ClickCalls';
    /** The phone-through rate (Ptr). */
    const Ptr = 'Ptr';
    /** The total cost for completed calls to your tracked number. */
    const PhoneSpend = 'PhoneSpend';
    /** The average cost per phone call (CPP). */
    const AverageCpp = 'AverageCpp';
    /** The total cost for cost for click spend and phone call spend combined. */
    const TotalCostPhoneAndClicks = 'TotalCostPhoneAndClicks';
    /** The Network element of an AdGroup. */
    const Network = 'Network';
    /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
    const TopVsOther = 'TopVsOther';
    /** The MatchType element of a Keyword. */
    const BidMatchType = 'BidMatchType';
    /** The match type used to deliver an ad. */
    const DeliveredMatchType = 'DeliveredMatchType';
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
    /** The percentage of customers to your website that only view one page (the landing page) and then leave your website. */
    const BounceRate = 'BounceRate';
    /** The total number of times customers visited your site. */
    const TotalVisits = 'TotalVisits';
    /** The average number of pages each customer goes to while on your site. */
    const AveragePagesPerVisit = 'AveragePagesPerVisit';
    /** The sum total of the time customers spent browsing your site divided by the number of customers that came to your site. */
    const AverageDurationPerVisit = 'AverageDurationPerVisit';
}
