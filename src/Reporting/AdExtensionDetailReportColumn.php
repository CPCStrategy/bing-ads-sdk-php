<?php

namespace BingAds\Reporting;

/**
 * Defines the attributes and performance statistics columns that you can include in the AdExtensionDetailReportRequest.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn610365(v=msads.90).aspx AdExtensionDetailReportColumn Value Set
 *
 * @used-by AdExtensionDetailReportRequest
 */
final class AdExtensionDetailReportColumn
{
    /** The Name element of an Account. */
    const AccountName = 'AccountName';
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
    /** The Title element of a MobileAd or TextAd. */
    const AdTitle = 'AdTitle';
    /** The Id element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
    const AdId = 'AdId';
    /** The type name that corresponds to the AdExtensionTypeId column. */
    const AdExtensionType = 'AdExtensionType';
    /** The system identifier that corresponds to the AdExtensionType column. */
    const AdExtensionTypeId = 'AdExtensionTypeId';
    /** The Id element of either the CallAdExtension, LocationAdExtension, ProductAdExtension, or SiteLinksAdExtension, which is inherited from the AdExtension base object. */
    const AdExtensionId = 'AdExtensionId';
    /** The Version element of either the CallAdExtension, LocationAdExtension, ProductAdExtension, or SiteLinksAdExtension, which is inherited from the AdExtension base object. */
    const AdExtensionVersion = 'AdExtensionVersion';
    /** The human readable ad extension property value. */
    const AdExtensionPropertyValue = 'AdExtensionPropertyValue';
    /** The number of times an ad has been displayed on search results pages. */
    const Impressions = 'Impressions';
    /** The DeviceName element of a DeviceOSTargetBid. */
    const DeviceType = 'DeviceType';
    /** The operating system of the device specified in the DeviceType column and corresponding to the OSNames element of a DeviceOSTargetBid. */
    const DeviceOS = 'DeviceOS';
    /** The number of times that the ads in the account were clicked. */
    const Clicks = 'Clicks';
    /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
    const Ctr = 'Ctr';
    /** The number of conversions. */
    const Conversions = 'Conversions';
    /** The cost per conversion. */
    const CostPerConversion = 'CostPerConversion';
    /** The conversion rate as a percentage. */
    const ConversionRate = 'ConversionRate';
    /** The cost per click (CPC) summed for each click. */
    const Spend = 'Spend';
    /** The average cost per click (CPC). */
    const AverageCpc = 'AverageCpc';
    /** The MatchType element of a Keyword. */
    const BidMatchType = 'BidMatchType';
    /** The match type used to deliver an ad. */
    const DeliveredMatchType = 'DeliveredMatchType';
    /** The Network element of an AdGroup. */
    const Network = 'Network';
    /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
    const TopVsOther = 'TopVsOther';
    /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
    const Assists = 'Assists';
    /** Cost information that is optionally provided by advertisers, including non-advertising costs, taxes, and shipping. */
    const ExtendedCost = 'ExtendedCost';
    /** The revenue optionally reported by the advertiser as a result of conversions. */
    const Revenue = 'Revenue';
    /** The return on ad spend (ROAS). */
    const ReturnOnAdSpend = 'ReturnOnAdSpend';
    /** The cost per assist. */
    const CostPerAssist = 'CostPerAssist';
    /** The revenue per conversion. */
    const RevenuePerConversion = 'RevenuePerConversion';
    /** The revenue per assist. */
    const RevenuePerAssist = 'RevenuePerAssist';
}
