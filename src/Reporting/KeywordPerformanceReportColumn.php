<?php

namespace BingAds\Reporting;

/**
 * Defines the attributes and performance statistics columns that you can include in the KeywordPerformanceReportRequest.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb672087(v=msads.90).aspx KeywordPerformanceReportColumn Value Set
 *
 * @used-by KeywordPerformanceReportRequest
 * @used-by KeywordPerformanceReportSort
 */
final class KeywordPerformanceReportColumn
{
    /** The Name element of an Account. */
    const AccountName = 'AccountName';
    /** The Number element of an Account. */
    const AccountNumber = 'AccountNumber';
    /** The Id element of an Account. */
    const AccountId = 'AccountId';
    /** The time period of each report row. */
    const TimePeriod = 'TimePeriod';
    /** The Name element of a Campaign. */
    const CampaignName = 'CampaignName';
    /** The Id element of a Campaign. */
    const CampaignId = 'CampaignId';
    /** The Name element of an AdGroup. */
    const AdGroupName = 'AdGroupName';
    /** The Id element of an AdGroup. */
    const AdGroupId = 'AdGroupId';
    /** The Text element of a Keyword. */
    const Keyword = 'Keyword';
    /** The Id element of a Keyword. */
    const KeywordId = 'KeywordId';
    /** The Id element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
    const AdId = 'AdId';
    /** The Type element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
    const AdType = 'AdType';
    /** The DestinationUrl element of the TextAd, MobileAd, Keyword, or BiddableAdGroupCriterion. */
    const DestinationUrl = 'DestinationUrl';
    /** The maximum cost per click. */
    const CurrentMaxCpc = 'CurrentMaxCpc';
    /** The CurrencyType element of an Account. */
    const CurrencyCode = 'CurrencyCode';
    /** The match type used to deliver an ad. */
    const DeliveredMatchType = 'DeliveredMatchType';
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
    /** The average of the cost-per-thousand impressions of the ads. */
    const AverageCpm = 'AverageCpm';
    /** The PricingModel element of an AdGroup. */
    const PricingModel = 'PricingModel';
    /** The MatchType element of a Keyword. */
    const BidMatchType = 'BidMatchType';
    /** The DeviceName element of a DeviceOSTargetBid. */
    const DeviceType = 'DeviceType';
    /** The numeric score shows you how competitive your ads are in the marketplace by measuring how relevant your keywords and landing pages are to customers' search terms. */
    const QualityScore = 'QualityScore';
    /** A numeric score that indicates how likely your ads will be clicked and how well your keyword competes against other keywords targeting the same traffic. */
    const KeywordRelevance = 'KeywordRelevance';
    /** A numeric score that indicates how relevant your ad and landing page are to the customer's search query or other input. */
    const LandingPageRelevance = 'LandingPageRelevance';
    /** A numeric score that indicates whether your landing page is likely to provide a good experience to customers who click your ad and land on your website. */
    const LandingPageUserExperience = 'LandingPageUserExperience';
    /** The Language element of an AdGroup. */
    const Language = 'Language';
    /** The historic quality score of the keyword. */
    const HistoricQualityScore = 'HistoricQualityScore';
    /** The numeric score that indicates the historic relevance of your keyword to the search term. */
    const HistoricKeywordRelevance = 'HistoricKeywordRelevance';
    /** The numeric score that indicates the historic relevance of your ad and landing page to the search term. */
    const HistoricLandingPageRelevance = 'HistoricLandingPageRelevance';
    /** The numeric score that is the aggregate assessment of the historic quality of all landing pages on your site. */
    const HistoricLandingPageUserExperience = 'HistoricLandingPageUserExperience';
    /** An identifier that uniquely identifies the keyword and match-type combination. */
    const KeywordMatchTypeId = 'KeywordMatchTypeId';
    /** The numeric score that indicates the possible increase in the number of impressions that the keyword could receive if the corresponding QualityScore column would rise above underperforming. */
    const QualityImpact = 'QualityImpact';
    /** Reserved for internal use. */
    const BusinessListingId = 'BusinessListingId';
    /** Reserved for internal use. */
    const BusinessListingName = 'BusinessListingName';
    /** Reserved for internal use. */
    const BusinessCategoryId = 'BusinessCategoryId';
    /** Reserved for internal use. */
    const BusinessCategoryName = 'BusinessCategoryName';
    /** The Status element of a Campaign. */
    const CampaignStatus = 'CampaignStatus';
    /** The AccountLifeCycleStatus element of an Account. */
    const AccountStatus = 'AccountStatus';
    /** The Status element of an AdGroup. */
    const AdGroupStatus = 'AdGroupStatus';
    /** The Status element of a Keyword. */
    const KeywordStatus = 'KeywordStatus';
    /** The Network element of an AdGroup. */
    const Network = 'Network';
    /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
    const TopVsOther = 'TopVsOther';
    /** The operating system of the device specified in the DeviceType column and corresponding to the OSNames element of a DeviceOSTargetBid. */
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
    /** The percentage of customers to your website that only view one page (the landing page) and then leave your website. */
    const BounceRate = 'BounceRate';
    /** The total number of times customers visited your site. */
    const TotalVisits = 'TotalVisits';
    /** The average number of pages each customer goes to while on your site. */
    const AveragePagesPerVisit = 'AveragePagesPerVisit';
    /** The sum total of the time customers spent browsing your site divided by the number of customers that came to your site. */
    const AverageDurationPerVisit = 'AverageDurationPerVisit';
}
