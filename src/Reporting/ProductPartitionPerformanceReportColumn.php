<?php

namespace BingAds\Reporting;

/**
 * This feature is currently in pilot and will be generally available soon.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913142(v=msads.90).aspx ProductPartitionPerformanceReportColumn Value Set
 *
 * @used-by ProductPartitionPerformanceReportRequest
 */
final class ProductPartitionPerformanceReportColumn
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
    /** The forward slash ('/') delimited list of ProductCondition, reported as Operand = Attribute. */
    const ProductGroup = 'ProductGroup';
    /** The Id element of an AdGroupCriterion. */
    const AdGroupCriterionId = 'AdGroupCriterionId';
    /** The PartitionType element of a ProductPartition. */
    const PartitionType = 'PartitionType';
    /** The Id element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
    const AdId = 'AdId';
    /** The maximum cost per click. */
    const CurrentMaxCpc = 'CurrentMaxCpc';
    /** The CurrencyType element of an Account. */
    const CurrencyCode = 'CurrencyCode';
    /** The match type used to deliver an ad. */
    const DeliveredMatchType = 'DeliveredMatchType';
    /** The MatchType element of a Keyword. */
    const BidMatchType = 'BidMatchType';
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
    /** The number of conversions. */
    const Conversions = 'Conversions';
    /** The conversion rate as a percentage. */
    const ConversionRate = 'ConversionRate';
    /** The cost per conversion. */
    const CostPerConversion = 'CostPerConversion';
    /** The DeviceName element of a DeviceOSTargetBid. */
    const DeviceType = 'DeviceType';
    /** The Language element of an AdGroup. */
    const Language = 'Language';
    /** The Status element of a Campaign. */
    const CampaignStatus = 'CampaignStatus';
    /** The AccountLifeCycleStatus element of an Account. */
    const AccountStatus = 'AccountStatus';
    /** The Status element of an AdGroup. */
    const AdGroupStatus = 'AdGroupStatus';
    /** The DestinationUrl element of the TextAd, MobileAd, Keyword, or BiddableAdGroupCriterion. */
    const DestinationUrl = 'DestinationUrl';
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
    /** The cost per assist. */
    const CostPerAssist = 'CostPerAssist';
    /** The revenue per conversion. */
    const RevenuePerConversion = 'RevenuePerConversion';
    /** The revenue per assist. */
    const RevenuePerAssist = 'RevenuePerAssist';
}
