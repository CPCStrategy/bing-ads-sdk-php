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
    const ACCOUNT_NAME = 'AccountName';
    /** The time period of each report row. */
    const TIME_PERIOD = 'TimePeriod';
    /** The Name element of a Campaign. */
    const CAMPAIGN_NAME = 'CampaignName';
    /** The Name element of an AdGroup. */
    const AD_GROUP_NAME = 'AdGroupName';
    /** The Text element of a Keyword. */
    const KEYWORD = 'Keyword';
    /** The match type used to deliver an ad. */
    const DELIVERED_MATCH_TYPE = 'DeliveredMatchType';
    /** The MatchType element of a Keyword. */
    const BID_MATCH_TYPE = 'BidMatchType';
    /** The Language element of an AdGroup. */
    const LANGUAGE = 'Language';
    /** The Number element of an Account. */
    const ACCOUNT_NUMBER = 'AccountNumber';
    /** The Id element of an Account. */
    const ACCOUNT_ID = 'AccountId';
    /** The Id element of a Keyword. */
    const KEYWORD_ID = 'KeywordId';
    /** The Id element of an AdGroup. */
    const AD_GROUP_ID = 'AdGroupId';
    /** The Id element of a Campaign. */
    const CAMPAIGN_ID = 'CampaignId';
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
    /** The percentage of time your ads were displayed to users who searched by keywords that matched your keywords and targeting selections. */
    const IMPRESSION_SHARE_PERCENT = 'ImpressionSharePercent';
    /** The percentage of time your ads would have been displayed to users, but were not because of a budget shortfall. */
    const IMPRESSION_LOST_TO_BUDGET_PERCENT = 'ImpressionLostToBudgetPercent';
    /** The percentage of time your ads would have been displayed to users, but were not because your ads ranked too low in the auction. */
    const IMPRESSION_LOST_TO_RANK_PERCENT = 'ImpressionLostToRankPercent';
    /** The percentage of time your ads would have been displayed to users, but were not due to one or more of the following reasons. */
    const IMPRESSION_LOST_TO_LANDING_PAGE_RELEVANCE_PERCENT = 'ImpressionLostToLandingPageRelevancePercent';
    /** The percentage of time your ads would have been displayed to users, but were not because your ad copy was not relevant to the user's search query. */
    const IMPRESSION_LOST_TO_KEYWORD_RELEVANCE_PERCENT = 'ImpressionLostToKeywordRelevancePercent';
    const IMPRESSION_LOST_TO_RELEVANCE_PERCENT = 'ImpressionLostToRelevancePercent';
    /** The percentage of time your ads would have been displayed to users, but were not because your bid was too low or your bid and quality score was below minimum thresholds, which prevented you from entering the auction. */
    const IMPRESSION_LOST_TO_BID_PERCENT = 'ImpressionLostToBidPercent';
    /** The maximum cost per click. */
    const CURRENT_MAX_CPC = 'CurrentMaxCpc';
    /** The numeric score shows you how competitive your ads are in the marketplace by measuring how relevant your keywords and landing pages are to customers' search terms. */
    const QUALITY_SCORE = 'QualityScore';
    /** A numeric score that indicates how likely your ads will be clicked and how well your keyword competes against other keywords targeting the same traffic. */
    const KEYWORD_RELEVANCE = 'KeywordRelevance';
    /** A numeric score that indicates how relevant your ad and landing page are to the customer's search query or other input. */
    const LANDING_PAGE_RELEVANCE = 'LandingPageRelevance';
    /** A numeric score that indicates whether your landing page is likely to provide a good experience to customers who click your ad and land on your website. */
    const LANDING_PAGE_USER_EXPERIENCE = 'LandingPageUserExperience';
    /** The number of conversions. */
    const CONVERSIONS = 'Conversions';
    /** The conversion rate as a percentage. */
    const CONVERSION_RATE = 'ConversionRate';
    /** The cost per conversion. */
    const COST_PER_CONVERSION = 'CostPerConversion';
    /** The AdDistribution element of an AdGroup. */
    const AD_DISTRIBUTION = 'AdDistribution';
    const CLICK_SHARE_PERCENT = 'ClickSharePercent';
}
