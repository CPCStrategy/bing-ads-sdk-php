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
    /** The product item name. */
    const TITLE = 'Title';
    /** The condition of a product item. */
    const CONDITION = 'Condition';
    /** The product item's manufacturer, brand, or publisher. */
    const BRAND = 'Brand';
    /** The value of the Custom_label_0 field in your Bing Merchant Center catalog. */
    const CUSTOM_LABEL0 = 'CustomLabel0';
    /** The value of the Custom_label_1 field in your Bing Merchant Center catalog. */
    const CUSTOM_LABEL1 = 'CustomLabel1';
    /** The value of the Custom_label_2 field in your Bing Merchant Center catalog. */
    const CUSTOM_LABEL2 = 'CustomLabel2';
    /** The value of the Custom_label_3 field in your Bing Merchant Center catalog. */
    const CUSTOM_LABEL3 = 'CustomLabel3';
    /** The value of the Custom_label_4 field in your Bing Merchant Center catalog. */
    const CUSTOM_LABEL4 = 'CustomLabel4';
    /** The first level value of the Product_type field in your Bing Merchant Center catalog. */
    const PRODUCT_TYPE1 = 'ProductType1';
    /** The second level value of the Product_type field in your Bing Merchant Center catalog. */
    const PRODUCT_TYPE2 = 'ProductType2';
    /** The third level value of the Product_type field in your Bing Merchant Center catalog. */
    const PRODUCT_TYPE3 = 'ProductType3';
    /** The fourth level value of the Product_type field in your Bing Merchant Center catalog. */
    const PRODUCT_TYPE4 = 'ProductType4';
    /** The fifth level value of the Product_type field in your Bing Merchant Center catalog. */
    const PRODUCT_TYPE5 = 'ProductType5';
    /** The first level value of the Product_category field in your Bing Merchant Center catalog. */
    const PRODUCT_CATEGORY1 = 'ProductCategory1';
    /** The second level value of the Product_category field in your Bing Merchant Center catalog. */
    const PRODUCT_CATEGORY2 = 'ProductCategory2';
    /** The third level value of the Product_category field in your Bing Merchant Center catalog. */
    const PRODUCT_CATEGORY3 = 'ProductCategory3';
    /** The fourth level value of the Product_category field in your Bing Merchant Center catalog. */
    const PRODUCT_CATEGORY4 = 'ProductCategory4';
    /** The fifth level value of the Product_category field in your Bing Merchant Center catalog. */
    const PRODUCT_CATEGORY5 = 'ProductCategory5';
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
