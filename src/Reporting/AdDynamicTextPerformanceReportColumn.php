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
    /** The Name element of an Account. */
    const ACCOUNT_NAME = 'AccountName';
    /** The Id element of an Account. */
    const ACCOUNT_ID = 'AccountId';
    /** The Number element of an Account. */
    const ACCOUNT_NUMBER = 'AccountNumber';
    /** The time period of each report row. */
    const TIME_PERIOD = 'TimePeriod';
    /** The Name element of an AdGroup. */
    const AD_GROUP_NAME = 'AdGroupName';
    /** The Id element of an AdGroup. */
    const AD_GROUP_ID = 'AdGroupId';
    /** The Text element of a Keyword. */
    const KEYWORD = 'Keyword';
    const AD_ID = 'AdId';
    /** The Title element of a MobileAd or TextAd. */
    const AD_TITLE = 'AdTitle';
    /** The Type element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
    const AD_TYPE = 'AdType';
    /** The DestinationUrl element of the TextAd, MobileAd, Keyword, or BiddableAdGroupCriterion. */
    const DESTINATION_URL = 'DestinationUrl';
    /** The Param1 element of a Keyword or BiddableAdGroupCriterion. */
    const PARAM1 = 'Param1';
    /** The Param2 element of a Keyword or BiddableAdGroupCriterion. */
    const PARAM2 = 'Param2';
    /** The Param3 element of a Keyword or BiddableAdGroupCriterion. */
    const PARAM3 = 'Param3';
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
    /** The DeviceName element of a DeviceOSTargetBid. */
    const DEVICE_TYPE = 'DeviceType';
    /** The Language element of an AdGroup. */
    const LANGUAGE = 'Language';
}
