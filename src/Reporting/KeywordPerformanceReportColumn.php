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
    /** The Id element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
    const AD_ID = 'AdId';
    /** The Type element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
    const AD_TYPE = 'AdType';
    /** The DestinationUrl element of the TextAd, MobileAd, Keyword, or BiddableAdGroupCriterion. */
    const DESTINATION_URL = 'DestinationUrl';
    /** The maximum cost per click. */
    const CURRENT_MAX_CPC = 'CurrentMaxCpc';
    /** The CurrencyType element of an Account. */
    const CURRENCY_CODE = 'CurrencyCode';
    /** The match type used to deliver an ad. */
    const DELIVERED_MATCH_TYPE = 'DeliveredMatchType';
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
    /** The average of the cost-per-thousand impressions of the ads. */
    const AVERAGE_CPM = 'AverageCpm';
    /** The PricingModel element of an AdGroup. */
    const PRICING_MODEL = 'PricingModel';
    /** The MatchType element of a Keyword. */
    const BID_MATCH_TYPE = 'BidMatchType';
    /** The DeviceName element of a DeviceOSTargetBid. */
    const DEVICE_TYPE = 'DeviceType';
    /** The numeric score shows you how competitive your ads are in the marketplace by measuring how relevant your keywords and landing pages are to customers' search terms. */
    const QUALITY_SCORE = 'QualityScore';
    /** A numeric score that indicates how likely your ads will be clicked and how well your keyword competes against other keywords targeting the same traffic. */
    const KEYWORD_RELEVANCE = 'KeywordRelevance';
    /** A numeric score that indicates how relevant your ad and landing page are to the customer's search query or other input. */
    const LANDING_PAGE_RELEVANCE = 'LandingPageRelevance';
    /** A numeric score that indicates whether your landing page is likely to provide a good experience to customers who click your ad and land on your website. */
    const LANDING_PAGE_USER_EXPERIENCE = 'LandingPageUserExperience';
    /** The Language element of an AdGroup. */
    const LANGUAGE = 'Language';
    /** The historic quality score of the keyword. */
    const HISTORIC_QUALITY_SCORE = 'HistoricQualityScore';
    /** The numeric score that indicates the historic relevance of your keyword to the search term. */
    const HISTORIC_KEYWORD_RELEVANCE = 'HistoricKeywordRelevance';
    /** The numeric score that indicates the historic relevance of your ad and landing page to the search term. */
    const HISTORIC_LANDING_PAGE_RELEVANCE = 'HistoricLandingPageRelevance';
    /** The numeric score that is the aggregate assessment of the historic quality of all landing pages on your site. */
    const HISTORIC_LANDING_PAGE_USER_EXPERIENCE = 'HistoricLandingPageUserExperience';
    /** An identifier that uniquely identifies the keyword and match-type combination. */
    const KEYWORD_MATCH_TYPE_ID = 'KeywordMatchTypeId';
    /** The numeric score that indicates the possible increase in the number of impressions that the keyword could receive if the corresponding QualityScore column would rise above underperforming. */
    const QUALITY_IMPACT = 'QualityImpact';
    /** Reserved for internal use. */
    const BUSINESS_LISTING_ID = 'BusinessListingId';
    /** Reserved for internal use. */
    const BUSINESS_LISTING_NAME = 'BusinessListingName';
    /** Reserved for internal use. */
    const BUSINESS_CATEGORY_ID = 'BusinessCategoryId';
    /** Reserved for internal use. */
    const BUSINESS_CATEGORY_NAME = 'BusinessCategoryName';
    /** The Status element of a Campaign. */
    const CAMPAIGN_STATUS = 'CampaignStatus';
    /** The AccountLifeCycleStatus element of an Account. */
    const ACCOUNT_STATUS = 'AccountStatus';
    /** The Status element of an AdGroup. */
    const AD_GROUP_STATUS = 'AdGroupStatus';
    /** The Status element of a Keyword. */
    const KEYWORD_STATUS = 'KeywordStatus';
    /** The Network element of an AdGroup. */
    const NETWORK = 'Network';
    /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
    const TOP_VS_OTHER = 'TopVsOther';
    /** The operating system of the device specified in the DeviceType column and corresponding to the OSNames element of a DeviceOSTargetBid. */
    const DEVICE_OS = 'DeviceOS';
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
