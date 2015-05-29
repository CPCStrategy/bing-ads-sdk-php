<?php

namespace BingAds\Reporting;

/**
 * Defines the attributes and performance statistics columns that you can include in the ProductOfferPerformanceReportRequest.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743720(v=msads.90).aspx ProductOfferPerformanceReportColumn Value Set
 *
 * @used-by ProductOfferPerformanceReportRequest
 */
final class ProductOfferPerformanceReportColumn
{
    /** The time period of each report row. */
    const TIME_PERIOD = 'TimePeriod';
    /** The Name element of an Account. */
    const ACCOUNT_NAME = 'AccountName';
    /** The Number element of an Account. */
    const ACCOUNT_NUMBER = 'AccountNumber';
    /** The Name element of an AdGroup. */
    const AD_GROUP_NAME = 'AdGroupName';
    /** The Id element of an AdGroup. */
    const AD_GROUP_ID = 'AdGroupId';
    /** The Id element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
    const AD_ID = 'AdId';
    /** The Status element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
    const AD_STATUS = 'AdStatus';
    /** The Name element of a Campaign. */
    const CAMPAIGN_NAME = 'CampaignName';
    /** The CurrencyType element of an Account. */
    const CURRENCY_CODE = 'CurrencyCode';
    /** The DeviceName element of a DeviceOSTargetBid. */
    const DEVICE_TYPE = 'DeviceType';
    /** The Language element of an AdGroup. */
    const LANGUAGE = 'Language';
    /** The report will include a column that contains the unique identifier provided by a merchant for each product offer. */
    const MERCHANT_PRODUCT_ID = 'MerchantProductId';
    /** The report will include a column that contains the merchant or store name that offers the product. */
    const SELLER_NAME = 'SellerName';
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
    /** The average of the cost-per-thousand impressions of the ads. */
    const AVERAGE_CPM = 'AverageCpm';
}
