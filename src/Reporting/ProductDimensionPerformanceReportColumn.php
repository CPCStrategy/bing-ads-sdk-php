<?php

namespace BingAds\Reporting;

/**
 * This feature is currently in pilot and will be generally available soon.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913140(v=msads.90).aspx ProductDimensionPerformanceReportColumn Value Set
 *
 * @used-by ProductDimensionPerformanceReportRequest
 */
final class ProductDimensionPerformanceReportColumn
{
    /** The time period of each report row. */
    const TimePeriod = 'TimePeriod';
    /** The Name element of an Account. */
    const AccountName = 'AccountName';
    /** The Number element of an Account. */
    const AccountNumber = 'AccountNumber';
    /** The Name element of an AdGroup. */
    const AdGroupName = 'AdGroupName';
    /** The Id element of an AdGroup. */
    const AdGroupId = 'AdGroupId';
    /** The Id element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
    const AdId = 'AdId';
    /** The Status element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
    const AdStatus = 'AdStatus';
    /** The Name element of a Campaign. */
    const CampaignName = 'CampaignName';
    /** The CurrencyType element of an Account. */
    const CurrencyCode = 'CurrencyCode';
    /** The DeviceName element of a DeviceOSTargetBid. */
    const DeviceType = 'DeviceType';
    /** The Language element of an AdGroup. */
    const Language = 'Language';
    /** The report will include a column that contains the unique identifier provided by a merchant for each product offer. */
    const MerchantProductId = 'MerchantProductId';
    /** The report will include a column that contains the merchant or store name that offers the product. */
    const SellerName = 'SellerName';
    /** The product item name. */
    const Title = 'Title';
    /** The condition of a product item. */
    const Condition = 'Condition';
    /** The product item's manufacturer, brand, or publisher. */
    const Brand = 'Brand';
    /** The value of the Custom_label_0 field in your Bing Merchant Center catalog. */
    const CustomLabel0 = 'CustomLabel0';
    /** The value of the Custom_label_1 field in your Bing Merchant Center catalog. */
    const CustomLabel1 = 'CustomLabel1';
    /** The value of the Custom_label_2 field in your Bing Merchant Center catalog. */
    const CustomLabel2 = 'CustomLabel2';
    /** The value of the Custom_label_3 field in your Bing Merchant Center catalog. */
    const CustomLabel3 = 'CustomLabel3';
    /** The value of the Custom_label_4 field in your Bing Merchant Center catalog. */
    const CustomLabel4 = 'CustomLabel4';
    /** The first level value of the Product_type field in your Bing Merchant Center catalog. */
    const ProductType1 = 'ProductType1';
    /** The second level value of the Product_type field in your Bing Merchant Center catalog. */
    const ProductType2 = 'ProductType2';
    /** The third level value of the Product_type field in your Bing Merchant Center catalog. */
    const ProductType3 = 'ProductType3';
    /** The fourth level value of the Product_type field in your Bing Merchant Center catalog. */
    const ProductType4 = 'ProductType4';
    /** The fifth level value of the Product_type field in your Bing Merchant Center catalog. */
    const ProductType5 = 'ProductType5';
    /** The first level value of the Product_category field in your Bing Merchant Center catalog. */
    const ProductCategory1 = 'ProductCategory1';
    /** The second level value of the Product_category field in your Bing Merchant Center catalog. */
    const ProductCategory2 = 'ProductCategory2';
    /** The third level value of the Product_category field in your Bing Merchant Center catalog. */
    const ProductCategory3 = 'ProductCategory3';
    /** The fourth level value of the Product_category field in your Bing Merchant Center catalog. */
    const ProductCategory4 = 'ProductCategory4';
    /** The fifth level value of the Product_category field in your Bing Merchant Center catalog. */
    const ProductCategory5 = 'ProductCategory5';
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
    /** The average of the cost-per-thousand impressions of the ads. */
    const AverageCpm = 'AverageCpm';
}
