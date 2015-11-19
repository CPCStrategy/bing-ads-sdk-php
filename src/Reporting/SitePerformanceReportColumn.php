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
    const AccountName = 'AccountName';
    /** The Number element of an Account. */
    const AccountNumber = 'AccountNumber';
    /** The Id element of an Account. */
    const AccountId = 'AccountId';
    /** The time period of each report row. */
    const TimePeriod = 'TimePeriod';
    /** The Name element of a Campaign. */
    const CampaignName = 'CampaignName';
    /** The Id element of a Campaign. */
    const CampaignId = 'CampaignId';
    /** The Name element of an AdGroup. */
    const AdGroupName = 'AdGroupName';
    /** The Id element of an AdGroup. */
    const AdGroupId = 'AdGroupId';
    /** The URL of the website that displayed the ad. */
    const Site = 'Site';
    /** The Id element of a SitePlacement. */
    const SiteId = 'SiteId';
    /** The Id element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
    const AdId = 'AdId';
    /** The DestinationUrl element of the TextAd, MobileAd, Keyword, or BiddableAdGroupCriterion. */
    const DestinationUrl = 'DestinationUrl';
    /** The maximum cost per click. */
    const CurrentMaxCpc = 'CurrentMaxCpc';
    /** The CurrencyType element of an Account. */
    const CurrencyCode = 'CurrencyCode';
    /** The match type used to deliver an ad. */
    const DeliveredMatchType = 'DeliveredMatchType';
    /** The AdDistribution element of an AdGroup. */
    const AdDistribution = 'AdDistribution';
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
    /** The number of conversions. */
    const Conversions = 'Conversions';
    /** The conversion rate as a percentage. */
    const ConversionRate = 'ConversionRate';
    /** The cost per conversion. */
    const CostPerConversion = 'CostPerConversion';
    /** The Type element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
    const AdType = 'AdType';
    /** The average of the cost-per-thousand impressions of the ads. */
    const AverageCpm = 'AverageCpm';
    /** The PricingModel element of an AdGroup. */
    const PricingModel = 'PricingModel';
    /** The DeviceName element of a DeviceOSTargetBid. */
    const DeviceType = 'DeviceType';
    /** The Language element of an AdGroup. */
    const Language = 'Language';
}
