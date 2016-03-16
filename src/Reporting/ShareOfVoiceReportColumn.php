<?php

namespace BingAds\Reporting;

/**
 * Defines the attributes and performance statistics columns that you can include in the ShareOfVoicePerformanceReportRequest.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj592910(v=msads.90).aspx ShareOfVoiceReportColumn Value Set
 * 
 * @used-by ShareOfVoiceReportRequest
 */
final class ShareOfVoiceReportColumn
{
    /** The Name element of an Account. */
    const AccountName = 'AccountName';
    /** The time period of each report row. */
    const TimePeriod = 'TimePeriod';
    /** The Name element of a Campaign. */
    const CampaignName = 'CampaignName';
    /** The Name element of an AdGroup. */
    const AdGroupName = 'AdGroupName';
    /** The Text element of a Keyword. */
    const Keyword = 'Keyword';
    /** The match type used to deliver an ad. */
    const DeliveredMatchType = 'DeliveredMatchType';
    /** The MatchType element of a Keyword. */
    const BidMatchType = 'BidMatchType';
    /** The Language element of an AdGroup. */
    const Language = 'Language';
    /** The Number element of an Account. */
    const AccountNumber = 'AccountNumber';
    /** The Id element of an Account. */
    const AccountId = 'AccountId';
    /** The Id element of a Keyword. */
    const KeywordId = 'KeywordId';
    /** The Id element of an AdGroup. */
    const AdGroupId = 'AdGroupId';
    /** The Id element of a Campaign. */
    const CampaignId = 'CampaignId';
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
    /** The percentage of time your ads were displayed to users who searched by keywords that matched your keywords and targeting selections. */
    const ImpressionSharePercent = 'ImpressionSharePercent';
    /** The percentage of time your ads would have been displayed to users, but were not because of a budget shortfall. */
    const ImpressionLostToBudgetPercent = 'ImpressionLostToBudgetPercent';
    /** The percentage of time your ads would have been displayed to users, but were not because your ads ranked too low in the auction. */
    const ImpressionLostToRankPercent = 'ImpressionLostToRankPercent';
    /** The percentage of time your ads would have been displayed to users, but were not due to one or more of the following reasons. */
    const ImpressionLostToLandingPageRelevancePercent = 'ImpressionLostToLandingPageRelevancePercent';
    /** The percentage of time your ads would have been displayed to users, but were not because your ad copy was not relevant to the user's search query. */
    const ImpressionLostToKeywordRelevancePercent = 'ImpressionLostToKeywordRelevancePercent';
    const ImpressionLostToRelevancePercent = 'ImpressionLostToRelevancePercent';
    /** The percentage of time your ads would have been displayed to users, but were not because your bid was too low or your bid and quality score was below minimum thresholds, which prevented you from entering the auction. */
    const ImpressionLostToBidPercent = 'ImpressionLostToBidPercent';
    /** The maximum cost per click. */
    const CurrentMaxCpc = 'CurrentMaxCpc';
    /** The numeric score shows you how competitive your ads are in the marketplace by measuring how relevant your keywords and landing pages are to customers' search terms. */
    const QualityScore = 'QualityScore';
    /** A numeric score that indicates how likely your ads will be clicked and how well your keyword competes against other keywords targeting the same traffic. */
    const KeywordRelevance = 'KeywordRelevance';
    /** A numeric score that indicates how relevant your ad and landing page are to the customer's search query or other input. */
    const LandingPageRelevance = 'LandingPageRelevance';
    /** A numeric score that indicates whether your landing page is likely to provide a good experience to customers who click your ad and land on your website. */
    const LandingPageUserExperience = 'LandingPageUserExperience';
    /** The number of conversions. */
    const Conversions = 'Conversions';
    /** The conversion rate as a percentage. */
    const ConversionRate = 'ConversionRate';
    /** The cost per conversion. */
    const CostPerConversion = 'CostPerConversion';
    /** The AdDistribution element of an AdGroup. */
    const AdDistribution = 'AdDistribution';
    const ClickSharePercent = 'ClickSharePercent';
    /** The DeviceName element of a DeviceOSTargetBid. */
    const DeviceType = 'DeviceType';
    /** The Network element of an AdGroup. */
    const Network = 'Network';
}
