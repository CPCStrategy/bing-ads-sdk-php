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
