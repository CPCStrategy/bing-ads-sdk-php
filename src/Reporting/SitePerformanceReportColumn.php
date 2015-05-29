<?php

namespace BingAds\Reporting;

/**
 * Defines the attributes and performance statistics columns that you can include in the SitePerformanceReportRequest.
 *
 * @link http://msdn.microsoft.com/en-us/library/dd797115(v=msads.90).aspx SitePerformanceReportColumn Value Set
 *
 * @used-by SitePerformanceReportRequest
 */
final class SitePerformanceReportColumn
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
    /** The URL of the website that displayed the ad. */
    const SITE = 'Site';
    /** The Id element of a SitePlacement. */
    const SITE_ID = 'SiteId';
    /** The Id element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
    const AD_ID = 'AdId';
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
    /** The Type element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
    const AD_TYPE = 'AdType';
    /** The average of the cost-per-thousand impressions of the ads. */
    const AVERAGE_CPM = 'AverageCpm';
    /** The PricingModel element of an AdGroup. */
    const PRICING_MODEL = 'PricingModel';
    /** The DeviceName element of a DeviceOSTargetBid. */
    const DEVICE_TYPE = 'DeviceType';
    /** The Language element of an AdGroup. */
    const LANGUAGE = 'Language';
}
