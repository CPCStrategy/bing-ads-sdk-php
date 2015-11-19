<?php

namespace BingAds\Reporting;

/**
 * The GeographicalLocationReportRequest and corresponding programming elements are deprecated, and instead you should use the GeoLocationPerformanceReportRequest.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn411634(v=msads.90).aspx GeographicalLocationReportColumn Value Set
 * 
 * @used-by GeographicalLocationReportRequest
 */
final class GeographicalLocationReportColumn
{
    /** The account name. */
    const AccountName = 'AccountName';
    /** The Bing Ads assigned number of an account. */
    const AccountNumber = 'AccountNumber';
    /** The Bing Ads assigned identifier of an account. */
    const AccountId = 'AccountId';
    /** The time period of each report row. */
    const TimePeriod = 'TimePeriod';
    /** The campaign name. */
    const CampaignName = 'CampaignName';
    /** The Bing Ads assigned identifier of a campaign. */
    const CampaignId = 'CampaignId';
    /** The ad group name. */
    const AdGroupName = 'AdGroupName';
    /** The Bing Ads assigned identifier of an ad group. */
    const AdGroupId = 'AdGroupId';
    /** The country used to deliver the ad. */
    const Country = 'Country';
    /** The state used to deliver the ad. */
    const State = 'State';
    /** The metro area used to deliver the ad. */
    const MetroArea = 'MetroArea';
    /** The account currency type. */
    const CurrencyCode = 'CurrencyCode';
    /** The ad distribution attribute of an ad group. */
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
    /** The average of the cost-per-thousand impressions of the ads. */
    const AverageCpm = 'AverageCpm';
    /** The Name element of a RadiusTargetBid. */
    const ProximityTargetLocation = 'ProximityTargetLocation';
    /** The Radius element of a RadiusTargetBid. */
    const Radius = 'Radius';
    /** The ad group language. */
    const Language = 'Language';
    /** The city used to deliver the ad. */
    const City = 'City';
    /** The name of a country if the user's geographical intent can be determined. */
    const QueryIntentCountry = 'QueryIntentCountry';
    /** The name of a state if the user's geographical intent can be determined. */
    const QueryIntentState = 'QueryIntentState';
    /** The name of a city if the user's geographical intent can be determined. */
    const QueryIntentCity = 'QueryIntentCity';
    /** The name of a metro area if the user's geographical intent can be determined. */
    const QueryIntentDMA = 'QueryIntentDMA';
    /** The keyword bid match type. */
    const BidMatchType = 'BidMatchType';
    /** The match type used to deliver an ad. */
    const DeliveredMatchType = 'DeliveredMatchType';
    /** The Network element of an AdGroup. */
    const Network = 'Network';
    /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
    const TopVsOther = 'TopVsOther';
    /** The device name attribute of a device OS target bid. */
    const DeviceType = 'DeviceType';
    /** The operating system of the device reported in the DeviceType column. */
    const DeviceOS = 'DeviceOS';
    /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
    const Assists = 'Assists';
    /** The number of conversions. */
    const Conversions = 'Conversions';
    /** The conversion rate as a percentage. */
    const ConversionRate = 'ConversionRate';
    /** Cost information that is optionally provided by advertisers, including non-advertising costs, taxes, and shipping. */
    const ExtendedCost = 'ExtendedCost';
    /** The revenue optionally reported by the advertiser as a result of conversions. */
    const Revenue = 'Revenue';
    /** The return on ad spend (ROAS). */
    const ReturnOnAdSpend = 'ReturnOnAdSpend';
    /** The cost per conversion. */
    const CostPerConversion = 'CostPerConversion';
    /** The cost per assist. */
    const CostPerAssist = 'CostPerAssist';
    /** The revenue per conversion. */
    const RevenuePerConversion = 'RevenuePerConversion';
    /** The revenue per assist. */
    const RevenuePerAssist = 'RevenuePerAssist';
}
