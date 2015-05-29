<?php

namespace BingAds\Reporting;

/**
 * Defines the attributes and performance statistics columns that you can include in the AdPerformanceReportRequest.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671923(v=msads.90).aspx AdPerformanceReportColumn Value Set
 *
 * @used-by AdPerformanceReportRequest
 */
final class AdPerformanceReportColumn
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
    /** The Id element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
    const AD_ID = 'AdId';
    /** The Id element of an AdGroup. */
    const AD_GROUP_ID = 'AdGroupId';
    /** The Title element of a MobileAd or TextAd. */
    const AD_TITLE = 'AdTitle';
    /** The Text element of a MobileAd or TextAd. */
    const AD_DESCRIPTION = 'AdDescription';
    /** The Type element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
    const AD_TYPE = 'AdType';
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
    /** The average of the cost-per-thousand impressions of the ads. */
    const AVERAGE_CPM = 'AverageCpm';
    /** The PricingModel element of an AdGroup. */
    const PRICING_MODEL = 'PricingModel';
    /** The DestinationUrl element of the TextAd, MobileAd, Keyword, or BiddableAdGroupCriterion. */
    const DESTINATION_URL = 'DestinationUrl';
    /** The DeviceName element of a DeviceOSTargetBid. */
    const DEVICE_TYPE = 'DeviceType';
    /** The Language element of an AdGroup. */
    const LANGUAGE = 'Language';
    /** The DisplayUrl element of a MobileAd or TextAd. */
    const DISPLAY_URL = 'DisplayUrl';
    /** Reserved for internal use. */
    const BUSINESS_LISTING_ID = 'BusinessListingId';
    /** Reserved for internal use. */
    const BUSINESS_LISTING_NAME = 'BusinessListingName';
    /** Reserved for internal use. */
    const BUSINESS_CATEGORY_ID = 'BusinessCategoryId';
    /** Reserved for internal use. */
    const BUSINESS_CATEGORY_NAME = 'BusinessCategoryName';
    /** The Status element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
    const AD_STATUS = 'AdStatus';
    /** The Network element of an AdGroup. */
    const NETWORK = 'Network';
    /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
    const TOP_VS_OTHER = 'TopVsOther';
    /** The MatchType element of a Keyword. */
    const BID_MATCH_TYPE = 'BidMatchType';
    /** The match type used to deliver an ad. */
    const DELIVERED_MATCH_TYPE = 'DeliveredMatchType';
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
}
