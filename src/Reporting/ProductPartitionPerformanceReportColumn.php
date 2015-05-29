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
    /** The forward slash ('/') delimited list of ProductCondition, reported as Operand = Attribute. */
    const PRODUCT_GROUP = 'ProductGroup';
    /** The Id element of an AdGroupCriterion. */
    const AD_GROUP_CRITERION_ID = 'AdGroupCriterionId';
    /** The PartitionType element of a ProductPartition. */
    const PARTITION_TYPE = 'PartitionType';
    /** The Id element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
    const AD_ID = 'AdId';
    /** The maximum cost per click. */
    const CURRENT_MAX_CPC = 'CurrentMaxCpc';
    /** The CurrencyType element of an Account. */
    const CURRENCY_CODE = 'CurrencyCode';
    /** The match type used to deliver an ad. */
    const DELIVERED_MATCH_TYPE = 'DeliveredMatchType';
    /** The MatchType element of a Keyword. */
    const BID_MATCH_TYPE = 'BidMatchType';
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
    /** The number of conversions. */
    const CONVERSIONS = 'Conversions';
    /** The conversion rate as a percentage. */
    const CONVERSION_RATE = 'ConversionRate';
    /** The cost per conversion. */
    const COST_PER_CONVERSION = 'CostPerConversion';
    /** The DeviceName element of a DeviceOSTargetBid. */
    const DEVICE_TYPE = 'DeviceType';
    /** The Language element of an AdGroup. */
    const LANGUAGE = 'Language';
    /** The Status element of a Campaign. */
    const CAMPAIGN_STATUS = 'CampaignStatus';
    /** The AccountLifeCycleStatus element of an Account. */
    const ACCOUNT_STATUS = 'AccountStatus';
    /** The Status element of an AdGroup. */
    const AD_GROUP_STATUS = 'AdGroupStatus';
    /** The DestinationUrl element of the TextAd, MobileAd, Keyword, or BiddableAdGroupCriterion. */
    const DESTINATION_URL = 'DestinationUrl';
    /** The Network element of an AdGroup. */
    const NETWORK = 'Network';
    /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
    const TOP_VS_OTHER = 'TopVsOther';
    /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
    const ASSISTS = 'Assists';
    /** Cost information that is optionally provided by advertisers, including non-advertising costs, taxes, and shipping. */
    const EXTENDED_COST = 'ExtendedCost';
    /** The revenue optionally reported by the advertiser as a result of conversions. */
    const REVENUE = 'Revenue';
    /** The cost per assist. */
    const COST_PER_ASSIST = 'CostPerAssist';
    /** The revenue per conversion. */
    const REVENUE_PER_CONVERSION = 'RevenuePerConversion';
    /** The revenue per assist. */
    const REVENUE_PER_ASSIST = 'RevenuePerAssist';
}
