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
    const ACCOUNT_NAME = 'AccountName';
    /** The Number element of an Account. */
    const ACCOUNT_NUMBER = 'AccountNumber';
    /** The Id element of an Account. */
    const ACCOUNT_ID = 'AccountId';
    /** The time period of each report row. */
    const TIME_PERIOD = 'TimePeriod';
    /** The CurrencyType element of an Account. */
    const CURRENCY_CODE = 'CurrencyCode';
    /** The AdDistribution element of an AdGroup. */
    const AD_DISTRIBUTION = 'AdDistribution';
    /** The number of times an ad has been displayed on search results pages. */
    const IMPRESSIONS = 'Impressions';
    /** The number of times that the ads in the account were clicked. */
    const CLICKS = 'Clicks';
    /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
    const CTR = 'Ctr';
    /** The average cost per click (CPC). */
    const AVERAGE_CPC = 'AverageCpc';
    /** The cost per click (CPC) summed for each click. */
    const SPEND = 'Spend';
    /** The average position of the ad on a webpage. */
    const AVERAGE_POSITION = 'AveragePosition';
    /** The number of conversions. */
    const CONVERSIONS = 'Conversions';
    /** The conversion rate as a percentage. */
    const CONVERSION_RATE = 'ConversionRate';
    /** The cost per conversion. */
    const COST_PER_CONVERSION = 'CostPerConversion';
    /** The number of low-quality clicks. */
    const LOW_QUALITY_CLICKS = 'LowQualityClicks';
    /** The low-quality clicks as a percentage. */
    const LOW_QUALITY_CLICKS_PERCENT = 'LowQualityClicksPercent';
    /** The number of impressions that result from low-quality keyword searches. */
    const LOW_QUALITY_IMPRESSIONS = 'LowQualityImpressions';
    /** The low-quality impressions as a percentage. */
    const LOW_QUALITY_IMPRESSIONS_PERCENT = 'LowQualityImpressionsPercent';
    /** The number of conversions that originate from low-quality clicks. */
    const LOW_QUALITY_CONVERSIONS = 'LowQualityConversions';
    /** The low-quality conversion rate as a percentage. */
    const LOW_QUALITY_CONVERSION_RATE = 'LowQualityConversionRate';
    /** The average of the cost-per-thousand impressions of the ads. */
    const AVERAGE_CPM = 'AverageCpm';
    /** The DeviceName element of a DeviceOSTargetBid. */
    const DEVICE_TYPE = 'DeviceType';
    /** The operating system of the device specified in the DeviceType column and corresponding to the OSNames element of a DeviceOSTargetBid. */
    const DEVICE_OS = 'DeviceOS';
    /** The percentage of time your ads were displayed to users who searched by keywords that matched your keywords and targeting selections. */
    const IMPRESSION_SHARE_PERCENT = 'ImpressionSharePercent';
    /** The percentage of time your ads would have been displayed to users, but were not because of a budget shortfall. */
    const IMPRESSION_LOST_TO_BUDGET_PERCENT = 'ImpressionLostToBudgetPercent';
    /** The percentage of time your ads would have been displayed to users, but were not because your ads ranked too low in the auction. */
    const IMPRESSION_LOST_TO_RANK_PERCENT = 'ImpressionLostToRankPercent';
    /** The percentage of time your ads would have been displayed to users, but were not because your bid was too low or your bid and quality score was below minimum thresholds, which prevented you from entering the auction. */
    const IMPRESSION_LOST_TO_BID_PERCENT = 'ImpressionLostToBidPercent';
    /** The percentage of time your ads would have been displayed to users, but were not due to one or more of the following reasons. */
    const IMPRESSION_LOST_TO_LANDING_PAGE_RELEVANCE_PERCENT = 'ImpressionLostToLandingPageRelevancePercent';
    /** The percentage of time your ads would have been displayed to users, but were not because your ad copy was not relevant to the user's search query. */
    const IMPRESSION_LOST_TO_KEYWORD_RELEVANCE_PERCENT = 'ImpressionLostToKeywordRelevancePercent';
    /** The number of times your tracked number was shown on all devices. */
    const PHONE_IMPRESSIONS = 'PhoneImpressions';
    /** The number of total calls to the tracked phone number that showed with your ad. */
    const PHONE_CALLS = 'PhoneCalls';
    /** The number of calls dialed manually from any device to the tracked phone number. */
    const MANUAL_CALLS = 'ManualCalls';
    /** The number of phone calls initiated by clicks. */
    const CLICK_CALLS = 'ClickCalls';
    /** The phone-through rate (Ptr). */
    const PTR = 'Ptr';
    /** The total cost for completed calls to your tracked number. */
    const PHONE_SPEND = 'PhoneSpend';
    /** The average cost per phone call (CPP). */
    const AVERAGE_CPP = 'AverageCpp';
    /** The total cost for cost for click spend and phone call spend combined. */
    const TOTAL_COST_PHONE_AND_CLICKS = 'TotalCostPhoneAndClicks';
    /** The Network element of an AdGroup. */
    const NETWORK = 'Network';
    /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
    const TOP_VS_OTHER = 'TopVsOther';
    /** The MatchType element of a Keyword. */
    const BID_MATCH_TYPE = 'BidMatchType';
    /** The match type used to deliver an ad. */
    const DELIVERED_MATCH_TYPE = 'DeliveredMatchType';
    /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
    const ASSISTS = 'Assists';
    /** Cost information that is optionally provided by advertisers, including non-advertising costs, taxes, and shipping. */
    const EXTENDED_COST = 'ExtendedCost';
    /** The revenue optionally reported by the advertiser as a result of conversions. */
    const REVENUE = 'Revenue';
    /** The return on ad spend (ROAS). */
    const RETURN_ON_AD_SPEND = 'ReturnOnAdSpend';
    /** The cost per assist. */
    const COST_PER_ASSIST = 'CostPerAssist';
    /** The revenue per conversion. */
    const REVENUE_PER_CONVERSION = 'RevenuePerConversion';
    /** The revenue per assist. */
    const REVENUE_PER_ASSIST = 'RevenuePerAssist';
    /** The percentage of customers to your website that only view one page (the landing page) and then leave your website. */
    const BOUNCE_RATE = 'BounceRate';
    /** The total number of times customers visited your site. */
    const TOTAL_VISITS = 'TotalVisits';
    /** The average number of pages each customer goes to while on your site. */
    const AVERAGE_PAGES_PER_VISIT = 'AveragePagesPerVisit';
    /** The sum total of the time customers spent browsing your site divided by the number of customers that came to your site. */
    const AVERAGE_DURATION_PER_VISIT = 'AverageDurationPerVisit';
}
