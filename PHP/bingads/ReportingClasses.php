<?php
// Generated on 4/10/2014 3:04:08 PM

namespace BingAds\Reporting
{
    use DateTime;

    final class ReportingServiceSettings
    {
        const ServiceNamespace = 'https://bingads.microsoft.com/Reporting/v9';
        const ProductionEndpoint = 'https://api.bingads.microsoft.com/Api/Advertiser/Reporting/v9/ReportingService.svc';
        const SandboxEndpoint = 'https://api.sandbox.bingads.microsoft.com/Api/Advertiser/Reporting/v9/ReportingService.svc';
    }

    /**
     * Defines the file formats that you can use for a report.
     * @link http://msdn.microsoft.com/en-us/library/bb671932(v=msads.90).aspx ReportFormat Value Set
     * 
     * @used-by ReportRequest
     */
    final class ReportFormat
    {
        /** The report format will be comma-separated values (. */
        const Csv = 'Csv';

        /** The report format will be tab-separated values (. */
        const Tsv = 'Tsv';

        /** The report format will be XML (. */
        const Xml = 'Xml';
    }

    /**
     * Defines the language values that you may specify for columns of a downloaded report.
     * @link http://msdn.microsoft.com/en-us/library/bb671595(v=msads.90).aspx ReportLanguage Value Set
     * 
     * @used-by ReportRequest
     */
    final class ReportLanguage
    {
        /** The report columns will be in English. */
        const English = 'English';

        /** The report columns will be in French. */
        const French = 'French';
    }

    /**
     * Defines the aggregation values that you can use for a report.
     * @link http://msdn.microsoft.com/en-us/library/bb672067(v=msads.90).aspx ReportAggregation Value Set
     * 
     * @used-by AccountPerformanceReportRequest
     * @used-by AdExtensionByAdReportRequest
     * @used-by AdExtensionByKeywordReportRequest
     * @used-by AdExtensionDetailReportRequest
     * @used-by AdGroupPerformanceReportRequest
     * @used-by CallDetailReportRequest
     * @used-by CampaignPerformanceReportRequest
     * @used-by KeywordPerformanceReportRequest
     * @used-by ProductTargetPerformanceReportRequest
     * @used-by SitePerformanceReportRequest
     */
    final class ReportAggregation
    {
        /** The report data will be aggregated for each day. */
        const Daily = 'Daily';

        /** The report data will be aggregated by each of the seven days in a week. */
        const DayOfWeek = 'DayOfWeek';

        /** The report data will be aggregated for each hour. */
        const Hourly = 'Hourly';

        /** The report data will be aggregated by each of the 24 hours in a day. */
        const HourOfDay = 'HourOfDay';

        /** The report data will be aggregated for each month. */
        const Monthly = 'Monthly';

        /** The report data will be aggregated for the entire specified report time. */
        const Summary = 'Summary';

        /** The report data will be aggregated for each week. */
        const Weekly = 'Weekly';

        /** The report data will be aggregated for each year. */
        const Yearly = 'Yearly';
    }

    /**
     * Defines the attributes and performance statistics columns that you can include in the SitePerformanceReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/dd797115(v=msads.90).aspx SitePerformanceReportColumn Value Set
     * 
     * @used-by SitePerformanceReportRequest
     */
    final class SitePerformanceReportColumn
    {
        /** The Id element of an Account. */
        const AccountId = 'AccountId';

        /** The Name element of an Account. */
        const AccountName = 'AccountName';

        /** The Number element of an Account. */
        const AccountNumber = 'AccountNumber';

        /** The AdDistribution element of an AdGroup. */
        const AdDistribution = 'AdDistribution';

        /** The Id element of an AdGroup. */
        const AdGroupId = 'AdGroupId';

        /** The Name element of an AdGroup. */
        const AdGroupName = 'AdGroupName';

        /** The Id element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
        const AdId = 'AdId';

        /** The Type element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
        const AdType = 'AdType';

        /** The average cost per click (CPC). */
        const AverageCpc = 'AverageCpc';

        /** The average of the cost-per-thousand impressions of the ads. */
        const AverageCpm = 'AverageCpm';

        /** The average position of the ad on a webpage. */
        const AveragePosition = 'AveragePosition';

        /** The Id element of a Campaign. */
        const CampaignId = 'CampaignId';

        /** The Name element of a Campaign. */
        const CampaignName = 'CampaignName';

        /** The number of times that the ads in the account were clicked. */
        const Clicks = 'Clicks';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
        const Ctr = 'Ctr';

        /** The CurrencyType element of an Account. */
        const CurrencyCode = 'CurrencyCode';

        /** The maximum cost per click. */
        const CurrentMaxCpc = 'CurrentMaxCpc';

        /** The match type used to deliver an ad. */
        const DeliveredMatchType = 'DeliveredMatchType';

        /** The DestinationUrl element of the TextAd, MobileAd, Keyword, or BiddableAdGroupCriterion. */
        const DestinationUrl = 'DestinationUrl';

        /** The DeviceName element of a DeviceOSTargetBid. */
        const DeviceType = 'DeviceType';

        /** The number of times an ad has been displayed on search results pages. */
        const Impressions = 'Impressions';

        /** The Language element of an AdGroup. */
        const Language = 'Language';

        /** The PricingModel element of an AdGroup. */
        const PricingModel = 'PricingModel';

        /** The URL of the website that displayed the ad. */
        const Site = 'Site';

        /** The Id element of a SitePlacement. */
        const SiteId = 'SiteId';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';
    }

    /**
     * Defines the ad distribution medium values that you can use to filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/bb671722(v=msads.90).aspx AdDistributionReportFilter Value Set
     * 
     * @used-by AccountPerformanceReportFilter
     * @used-by AdDynamicTextPerformanceReportFilter
     * @used-by AdGroupPerformanceReportFilter
     * @used-by AdPerformanceReportFilter
     * @used-by AgeGenderDemographicReportFilter
     * @used-by CampaignPerformanceReportFilter
     * @used-by DestinationUrlPerformanceReportFilter
     * @used-by GeographicalLocationReportFilter
     * @used-by KeywordPerformanceReportFilter
     * @used-by PublisherUsagePerformanceReportFilter
     * @used-by ShareOfVoiceReportFilter
     * @used-by SitePerformanceReportFilter
     */
    final class AdDistributionReportFilter
    {
        /** The report will contain content ads. */
        const Content = 'Content';

        /** The report will contain search ads. */
        const Search = 'Search';
    }

    /**
     * Defines the ad type values that you can use to filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/cc580687(v=msads.90).aspx AdTypeReportFilter Value Set
     * 
     * @used-by AdDynamicTextPerformanceReportFilter
     * @used-by AdPerformanceReportFilter
     * @used-by KeywordPerformanceReportFilter
     * @used-by SearchQueryPerformanceReportFilter
     * @used-by SitePerformanceReportFilter
     */
    final class AdTypeReportFilter
    {
        /** Not supported. */
        const Image = 'Image';

        /** Not supported. */
        const Local = 'Local';

        /** The report will include mobile ads. */
        const Mobile = 'Mobile';

        /** The report will include product ads. */
        const Product = 'Product';

        /** The report will include rich ads. */
        const RichAd = 'RichAd';

        /** Not supported. */
        const RichMedia = 'RichMedia';

        /** The report will include text ads. */
        const Text = 'Text';

        /** The report will contain creative ads that are served by third parties. */
        const ThirdPartyCreative = 'ThirdPartyCreative';
    }

    /**
     * Defines the delivered match type values that you can use to filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/bb671749(v=msads.90).aspx DeliveredMatchTypeReportFilter Value Set
     * 
     * @used-by KeywordPerformanceReportFilter
     * @used-by SearchQueryPerformanceReportFilter
     * @used-by ShareOfVoiceReportFilter
     * @used-by SitePerformanceReportFilter
     */
    final class DeliveredMatchTypeReportFilter
    {
        /** The report will contain ads that were delivered using a broad match comparison. */
        const Broad = 'Broad';

        /** The report will contain ads that were delivered by using a content match comparison. */
        const Content = 'Content';

        /** The report will contain ads that were delivered by using an exact match comparison. */
        const Exact = 'Exact';

        /** The report will contain ads that were delivered by using a phrase match comparison. */
        const Phrase = 'Phrase';
    }

    /**
     * Defines the device type values that you can use to filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/gg262850(v=msads.90).aspx DeviceTypeReportFilter Value Set
     * 
     * @used-by AccountPerformanceReportFilter
     * @used-by AdDynamicTextPerformanceReportFilter
     * @used-by AdExtensionByAdReportFilter
     * @used-by AdExtensionByKeywordReportFilter
     * @used-by AdExtensionDetailReportFilter
     * @used-by AdExtensionDimensionReportFilter
     * @used-by AdGroupPerformanceReportFilter
     * @used-by AdPerformanceReportFilter
     * @used-by CampaignPerformanceReportFilter
     * @used-by ConversionPerformanceReportFilter
     * @used-by DestinationUrlPerformanceReportFilter
     * @used-by KeywordPerformanceReportFilter
     * @used-by ProductTargetPerformanceReportFilter
     * @used-by SitePerformanceReportFilter
     */
    final class DeviceTypeReportFilter
    {
        /** The report will include text ads displayed on computers. */
        const Computer = 'Computer';

        /** The report will include mobile ads displayed on a mobile device. */
        const NonSmartPhone = 'NonSmartPhone';

        /** The report will include text ads displayed on smartphones (any high fidelity device capable of rendering full HTML). */
        const SmartPhone = 'SmartPhone';

        /** The report will include text ads displayed on a tablet device. */
        const Tablet = 'Tablet';
    }

    /**
     * Defines the predefined time and date range values for a report request.
     * @link http://msdn.microsoft.com/en-us/library/bb671772(v=msads.90).aspx ReportTimePeriod Value Set
     * 
     * @used-by ReportTime
     */
    final class ReportTimePeriod
    {
        /** A cumulative report for the four calendar weeks prior to today. */
        const LastFourWeeks = 'LastFourWeeks';

        /** A cumulative report for the previous calendar month. */
        const LastMonth = 'LastMonth';

        /** A report for the previous seven days, one row for each day. */
        const LastSevenDays = 'LastSevenDays';

        /** A cumulative report for the previous six calendar months. */
        const LastSixMonths = 'LastSixMonths';

        /** A cumulative report for the previous three calendar months. */
        const LastThreeMonths = 'LastThreeMonths';

        /** A cumulative report for the previous calendar week. */
        const LastWeek = 'LastWeek';

        /** A cumulative report for the previous calendar year. */
        const LastYear = 'LastYear';

        /** A cumulative report for the current calendar month. */
        const ThisMonth = 'ThisMonth';

        /** A cumulative report for the current calendar week. */
        const ThisWeek = 'ThisWeek';

        /** A cumulative report for the current calendar year. */
        const ThisYear = 'ThisYear';

        /** A cumulative report for the current day. */
        const Today = 'Today';

        /** A cumulative report for the previous day. */
        const Yesterday = 'Yesterday';
    }

    /**
     * Defines the attributes and performance statistics columns that you can include in the CallDetailReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/dn195843(v=msads.90).aspx CallDetailReportColumn Value Set
     * 
     * @used-by CallDetailReportRequest
     */
    final class CallDetailReportColumn
    {
        /** The Id element of an Account. */
        const AccountId = 'AccountId';

        /** The Name element of an Account. */
        const AccountName = 'AccountName';

        /** The Id element of an AdGroup. */
        const AdGroupId = 'AdGroupId';

        /** The Name element of an AdGroup. */
        const AdGroupName = 'AdGroupName';

        /** The area code where the user was physically located when they clicked the ad. */
        const AreaCode = 'AreaCode';

        /** The status of the call. */
        const CallStatus = 'CallStatus';

        /** The name of the call type. */
        const CallTypeName = 'CallTypeName';

        /** The Id element of a Campaign. */
        const CampaignId = 'CampaignId';

        /** The Name element of a Campaign. */
        const CampaignName = 'CampaignName';

        /** The city where the user was physically located when they clicked the ad. */
        const City = 'City';

        /** The duration of each forwarded call that originated from a call ad extension. */
        const Duration = 'Duration';

        /** The end time of the call. */
        const EndTime = 'EndTime';

        /** The total cost for completed calls to your tracked number. */
        const PhoneSpend = 'PhoneSpend';

        /** The start time of the call. */
        const StartTime = 'StartTime';

        /** The state or province where the user was physically located when they clicked the ad. */
        const State = 'State';
    }

    /**
     * Defines the attributes and performance statistics columns that you can include in the AccountPerformanceReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/bb671947(v=msads.90).aspx AccountPerformanceReportColumn Value Set
     * 
     * @used-by AccountPerformanceReportRequest
     */
    final class AccountPerformanceReportColumn
    {
        /** The Id element of an Account. */
        const AccountId = 'AccountId';

        /** The Name element of an Account. */
        const AccountName = 'AccountName';

        /** The Number element of an Account. */
        const AccountNumber = 'AccountNumber';

        /** The AdDistribution element of an AdGroup. */
        const AdDistribution = 'AdDistribution';

        /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
        const Assists = 'Assists';

        /** The average cost per click (CPC). */
        const AverageCpc = 'AverageCpc';

        /** The average of the cost-per-thousand impressions of the ads. */
        const AverageCpm = 'AverageCpm';

        /** The average cost per phone call (CPP). */
        const AverageCpp = 'AverageCpp';

        /** The average position of the ad on a webpage. */
        const AveragePosition = 'AveragePosition';

        /** The MatchType element of a Keyword. */
        const BidMatchType = 'BidMatchType';

        /** The number of phone calls initiated by clicks. */
        const ClickCalls = 'ClickCalls';

        /** The number of times that the ads in the account were clicked. */
        const Clicks = 'Clicks';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The cost per assist. */
        const CostPerAssist = 'CostPerAssist';

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
        const Ctr = 'Ctr';

        /** The CurrencyType element of an Account. */
        const CurrencyCode = 'CurrencyCode';

        /** The match type used to deliver an ad. */
        const DeliveredMatchType = 'DeliveredMatchType';

        /** The operating system of the device specified in the DeviceType column and corresponding to the OSNames element of a DeviceOSTargetBid. */
        const DeviceOS = 'DeviceOS';

        /** The DeviceName element of a DeviceOSTargetBid. */
        const DeviceType = 'DeviceType';

        /** Cost information that is optionally provided by advertisers, including non-advertising costs, taxes, and shipping. */
        const ExtendedCost = 'ExtendedCost';

        /** The percentage of time your ads would have been displayed to users, but were not because your bid was too low or your bid and quality score was below minimum thresholds, which prevented you from entering the auction. */
        const ImpressionLostToBidPercent = 'ImpressionLostToBidPercent';

        /** The percentage of time your ads would have been displayed to users, but were not because of a budget shortfall. */
        const ImpressionLostToBudgetPercent = 'ImpressionLostToBudgetPercent';

        /** The percentage of time your ads would have been displayed to users, but were not because your ad copy was not relevant to the user's search query. */
        const ImpressionLostToKeywordRelevancePercent = 'ImpressionLostToKeywordRelevancePercent';

        /** The percentage of time your ads would have been displayed to users, but were not due to one or both of the following reasons. */
        const ImpressionLostToLandingPageRelevancePercent = 'ImpressionLostToLandingPageRelevancePercent';

        /** The percentage of time your ads would have been displayed to users, but were not because your ads ranked too low in the auction. */
        const ImpressionLostToRankPercent = 'ImpressionLostToRankPercent';

        /** The number of times an ad has been displayed on search results pages. */
        const Impressions = 'Impressions';

        /** The percentage of time your ads were displayed to users who searched by keywords that matched your keywords and targeting selections. */
        const ImpressionSharePercent = 'ImpressionSharePercent';

        /** The number of low-quality clicks. */
        const LowQualityClicks = 'LowQualityClicks';

        /** The low-quality clicks as a percentage. */
        const LowQualityClicksPercent = 'LowQualityClicksPercent';

        /** The low-quality conversion rate as a percentage. */
        const LowQualityConversionRate = 'LowQualityConversionRate';

        /** The number of conversions that originate from low-quality clicks. */
        const LowQualityConversions = 'LowQualityConversions';

        /** The number of impressions that result from low-quality keyword searches. */
        const LowQualityImpressions = 'LowQualityImpressions';

        /** The low-quality impressions as a percentage. */
        const LowQualityImpressionsPercent = 'LowQualityImpressionsPercent';

        /** The number of calls dialed manually from any device to the tracked phone number. */
        const ManualCalls = 'ManualCalls';

        /** The Network element of an AdGroup. */
        const Network = 'Network';

        /** The number of total calls to the tracked phone number that showed with your ad. */
        const PhoneCalls = 'PhoneCalls';

        /** The number of times your tracked number was shown on all devices. */
        const PhoneImpressions = 'PhoneImpressions';

        /** The total cost for completed calls to your tracked number. */
        const PhoneSpend = 'PhoneSpend';

        /** The phone-through rate (Ptr). */
        const Ptr = 'Ptr';

        /** The return on ad spend (ROAS). */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The revenue per assist. */
        const RevenuePerAssist = 'RevenuePerAssist';

        /** The revenue per conversion. */
        const RevenuePerConversion = 'RevenuePerConversion';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
        const TopVsOther = 'TopVsOther';

        /** The total cost for cost for click spend and phone call spend combined. */
        const TotalCostPhoneAndClicks = 'TotalCostPhoneAndClicks';
    }

    /**
     * Defines the device operating system values that you can use to filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/dn411633(v=msads.90).aspx DeviceOSReportFilter Value Set
     * 
     * @used-by AccountPerformanceReportFilter
     * @used-by AdExtensionByAdReportFilter
     * @used-by AdExtensionByKeywordReportFilter
     * @used-by AdExtensionDetailReportFilter
     * @used-by AdExtensionDimensionReportFilter
     * @used-by AdGroupPerformanceReportFilter
     * @used-by CampaignPerformanceReportFilter
     */
    final class DeviceOSReportFilter
    {
        /** The report will include ads displayed on Android device operating systems. */
        const Android = 'Android';

        /** The report will include ads displayed on BlackBerry device operating systems. */
        const BlackBerry = 'BlackBerry';

        /** The report will include ads displayed on iOS device operating systems. */
        const iOS = 'iOS';

        /** The report will include ads displayed on a device operating system other than Android, BlackBerry, iOS, and Windows. */
        const Other = 'Other';

        /** The report will include ads displayed on Windows device operating systems. */
        const Windows = 'Windows';
    }

    /**
     * Defines the attributes and performance statistics columns that you can include in the CampaignPerformanceReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/bb671614(v=msads.90).aspx CampaignPerformanceReportColumn Value Set
     * 
     * @used-by CampaignPerformanceReportRequest
     */
    final class CampaignPerformanceReportColumn
    {
        /** The Id element of an Account. */
        const AccountId = 'AccountId';

        /** The Name element of an Account. */
        const AccountName = 'AccountName';

        /** The Number element of an Account. */
        const AccountNumber = 'AccountNumber';

        /** The AdDistribution element of an AdGroup. */
        const AdDistribution = 'AdDistribution';

        /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
        const Assists = 'Assists';

        /** The average cost per click (CPC). */
        const AverageCpc = 'AverageCpc';

        /** The average of the cost-per-thousand impressions of the ads. */
        const AverageCpm = 'AverageCpm';

        /** The average cost per phone call (CPP). */
        const AverageCpp = 'AverageCpp';

        /** The average position of the ad on a webpage. */
        const AveragePosition = 'AveragePosition';

        /** The MatchType element of a Keyword. */
        const BidMatchType = 'BidMatchType';

        /** The Id element of a Campaign. */
        const CampaignId = 'CampaignId';

        /** The Name element of a Campaign. */
        const CampaignName = 'CampaignName';

        /** The number of phone calls initiated by clicks. */
        const ClickCalls = 'ClickCalls';

        /** The number of times that the ads in the account were clicked. */
        const Clicks = 'Clicks';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The cost per assist. */
        const CostPerAssist = 'CostPerAssist';

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
        const Ctr = 'Ctr';

        /** The CurrencyType element of an Account. */
        const CurrencyCode = 'CurrencyCode';

        /** The match type used to deliver an ad. */
        const DeliveredMatchType = 'DeliveredMatchType';

        /** The operating system of the device specified in the DeviceType column and corresponding to the OSNames element of a DeviceOSTargetBid. */
        const DeviceOS = 'DeviceOS';

        /** The DeviceName element of a DeviceOSTargetBid. */
        const DeviceType = 'DeviceType';

        /** Cost information that is optionally provided by advertisers, including non-advertising costs, taxes, and shipping. */
        const ExtendedCost = 'ExtendedCost';

        /** The numeric score that indicates the historic relevance of your keyword to the search term. */
        const HistoricKeywordRelevance = 'HistoricKeywordRelevance';

        /** The numeric score that indicates the historic relevance of your ad and landing page to the search term. */
        const HistoricLandingPageRelevance = 'HistoricLandingPageRelevance';

        /** The numeric score that is the aggregate assessment of the historic quality of all landing pages on your site. */
        const HistoricLandingPageUserExperience = 'HistoricLandingPageUserExperience';

        /** The historic quality score of the keyword. */
        const HistoricQualityScore = 'HistoricQualityScore';

        /** The percentage of time your ads would have been displayed to users, but were not because your bid was too low or your bid and quality score was below minimum thresholds, which prevented you from entering the auction. */
        const ImpressionLostToBidPercent = 'ImpressionLostToBidPercent';

        /** The percentage of time your ads would have been displayed to users, but were not because of a budget shortfall. */
        const ImpressionLostToBudgetPercent = 'ImpressionLostToBudgetPercent';

        /** The percentage of time your ads would have been displayed to users, but were not because your ad copy was not relevant to the user's search query. */
        const ImpressionLostToKeywordRelevancePercent = 'ImpressionLostToKeywordRelevancePercent';

        /** The percentage of time your ads would have been displayed to users, but were not due to one or both of the following reasons. */
        const ImpressionLostToLandingPageRelevancePercent = 'ImpressionLostToLandingPageRelevancePercent';

        /** The percentage of time your ads would have been displayed to users, but were not because your ads ranked too low in the auction. */
        const ImpressionLostToRankPercent = 'ImpressionLostToRankPercent';

        /** The number of times an ad has been displayed on search results pages. */
        const Impressions = 'Impressions';

        /** The percentage of time your ads were displayed to users who searched by keywords that matched your keywords and targeting selections. */
        const ImpressionSharePercent = 'ImpressionSharePercent';

        /** The numeric score that indicates the relevance of your keyword to the search term. */
        const KeywordRelevance = 'KeywordRelevance';

        /** The numeric score that indicates the relevance of your ad and landing page to the search query. */
        const LandingPageRelevance = 'LandingPageRelevance';

        /** The numeric score that is an aggregate assessment of the quality of all landing pages on your site. */
        const LandingPageUserExperience = 'LandingPageUserExperience';

        /** The number of low-quality clicks. */
        const LowQualityClicks = 'LowQualityClicks';

        /** The low-quality clicks as a percentage. */
        const LowQualityClicksPercent = 'LowQualityClicksPercent';

        /** The low-quality conversion rate as a percentage. */
        const LowQualityConversionRate = 'LowQualityConversionRate';

        /** The number of conversions that originate from low-quality clicks. */
        const LowQualityConversions = 'LowQualityConversions';

        /** The number of impressions that result from low-quality keyword searches. */
        const LowQualityImpressions = 'LowQualityImpressions';

        /** The low-quality impressions as a percentage. */
        const LowQualityImpressionsPercent = 'LowQualityImpressionsPercent';

        /** The number of calls dialed manually from any device to the tracked phone number. */
        const ManualCalls = 'ManualCalls';

        /** The Network element of an AdGroup. */
        const Network = 'Network';

        /** The number of total calls to the tracked phone number that showed with your ad. */
        const PhoneCalls = 'PhoneCalls';

        /** The number of times your tracked number was shown on all devices. */
        const PhoneImpressions = 'PhoneImpressions';

        /** The total cost for completed calls to your tracked number. */
        const PhoneSpend = 'PhoneSpend';

        /** The phone-through rate (Ptr). */
        const Ptr = 'Ptr';

        /** The numeric score shows you how competitive your ads are in the marketplace by measuring how relevant your keywords and landing pages are to customers' search terms. */
        const QualityScore = 'QualityScore';

        /** The return on ad spend (ROAS). */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The revenue per assist. */
        const RevenuePerAssist = 'RevenuePerAssist';

        /** The revenue per conversion. */
        const RevenuePerConversion = 'RevenuePerConversion';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The current delivery status. */
        const Status = 'Status';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
        const TopVsOther = 'TopVsOther';

        /** The total cost for cost for click spend and phone call spend combined. */
        const TotalCostPhoneAndClicks = 'TotalCostPhoneAndClicks';
    }

    /**
     * Defines the campaign status values that you can use to filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/bb672004(v=msads.90).aspx CampaignStatusReportFilter Value Set
     * 
     * @used-by CampaignPerformanceReportFilter
     * @used-by SearchQueryPerformanceReportFilter
     */
    final class CampaignStatusReportFilter
    {
        /** The report will contain campaigns that are active. */
        const Active = 'Active';

        /** The report will contain campaigns that are paused due to budget restrictions. */
        const BudgetPaused = 'BudgetPaused';

        /** The report will contain campaigns that have been canceled. */
        const Cancelled = 'Cancelled';

        /** The report will contain campaigns that have been deleted. */
        const Deleted = 'Deleted';

        /** The report will contain campaigns that are paused. */
        const Paused = 'Paused';

        /** The same meaning as Active. */
        const Submitted = 'Submitted';
    }

    /**
     * Defines the aggregation values for reports that cannot specify hourly aggregation.
     * @link http://msdn.microsoft.com/en-us/library/bb672057(v=msads.90).aspx NonHourlyReportAggregation Value Set
     * 
     * @used-by AdDynamicTextPerformanceReportRequest
     * @used-by AdPerformanceReportRequest
     * @used-by AgeGenderDemographicReportRequest
     * @used-by ConversionPerformanceReportRequest
     * @used-by DestinationUrlPerformanceReportRequest
     * @used-by GeographicalLocationReportRequest
     * @used-by GoalsAndFunnelsReportRequest
     * @used-by PublisherUsagePerformanceReportRequest
     * @used-by RichAdComponentPerformanceReportRequest
     * @used-by ShareOfVoiceReportRequest
     * @used-by TacticChannelReportRequest
     * @used-by TrafficSourcesReportRequest
     */
    final class NonHourlyReportAggregation
    {
        /** The report data will be aggregated for each day. */
        const Daily = 'Daily';

        /** The report data will be aggregated for each month. */
        const Monthly = 'Monthly';

        /** The report data will be aggregated for the entire specified report time. */
        const Summary = 'Summary';

        /** The report data is aggregated for each week. */
        const Weekly = 'Weekly';

        /** The report data is aggregated for each year. */
        const Yearly = 'Yearly';
    }

    /**
     * Defines the attributes and performance statistics columns that you can include in the AdDynamicTextPerformanceReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/bb671878(v=msads.90).aspx AdDynamicTextPerformanceReportColumn Value Set
     * 
     * @used-by AdDynamicTextPerformanceReportRequest
     */
    final class AdDynamicTextPerformanceReportColumn
    {
        /** The Id element of an Account. */
        const AccountId = 'AccountId';

        /** The Name element of an Account. */
        const AccountName = 'AccountName';

        /** The Number element of an Account. */
        const AccountNumber = 'AccountNumber';

        /** The AdDistribution element of an AdGroup. */
        const AdDistribution = 'AdDistribution';

        /** The Id element of an AdGroup. */
        const AdGroupId = 'AdGroupId';

        /** The Name element of an AdGroup. */
        const AdGroupName = 'AdGroupName';
        const AdId = 'AdId';

        /** The Title element of a MobileAd or TextAd. */
        const AdTitle = 'AdTitle';

        /** The Type element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
        const AdType = 'AdType';

        /** The average cost per click (CPC). */
        const AverageCpc = 'AverageCpc';

        /** The average of the cost-per-thousand impressions of the ads. */
        const AverageCpm = 'AverageCpm';

        /** The average position of the ad on a webpage. */
        const AveragePosition = 'AveragePosition';

        /** The number of times that the ads in the account were clicked. */
        const Clicks = 'Clicks';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
        const Ctr = 'Ctr';

        /** The CurrencyType element of an Account. */
        const CurrencyCode = 'CurrencyCode';

        /** The DestinationUrl element of the TextAd, MobileAd, Keyword, or BiddableAdGroupCriterion. */
        const DestinationUrl = 'DestinationUrl';

        /** The DeviceName element of a DeviceOSTargetBid. */
        const DeviceType = 'DeviceType';

        /** The number of times an ad has been displayed on search results pages. */
        const Impressions = 'Impressions';

        /** The Text element of a Keyword. */
        const Keyword = 'Keyword';

        /** The Language element of an AdGroup. */
        const Language = 'Language';

        /** The Param1 element of a Keyword or BiddableAdGroupCriterion. */
        const Param1 = 'Param1';

        /** The Param2 element of a Keyword or BiddableAdGroupCriterion. */
        const Param2 = 'Param2';

        /** The Param3 element of a Keyword or BiddableAdGroupCriterion. */
        const Param3 = 'Param3';

        /** The PricingModel element of an AdGroup. */
        const PricingModel = 'PricingModel';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';
    }

    /**
     * Defines the attributes and performance statistics columns that you can include in the AdGroupPerformanceReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/bb671495(v=msads.90).aspx AdGroupPerformanceReportColumn Value Set
     * 
     * @used-by AdGroupPerformanceReportRequest
     */
    final class AdGroupPerformanceReportColumn
    {
        /** The Id element of an Account. */
        const AccountId = 'AccountId';

        /** The Name element of an Account. */
        const AccountName = 'AccountName';

        /** The Number element of an Account. */
        const AccountNumber = 'AccountNumber';

        /** The AdDistribution element of an AdGroup. */
        const AdDistribution = 'AdDistribution';

        /** The Id element of an AdGroup. */
        const AdGroupId = 'AdGroupId';

        /** The Name element of an AdGroup. */
        const AdGroupName = 'AdGroupName';

        /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
        const Assists = 'Assists';

        /** The average cost per click (CPC). */
        const AverageCpc = 'AverageCpc';

        /** The average of the cost-per-thousand impressions of the ads. */
        const AverageCpm = 'AverageCpm';

        /** The average cost per phone call (CPP). */
        const AverageCpp = 'AverageCpp';

        /** The average position of the ad on a webpage. */
        const AveragePosition = 'AveragePosition';

        /** The MatchType element of a Keyword. */
        const BidMatchType = 'BidMatchType';

        /** Reserved for internal use. */
        const BusinessCategoryId = 'BusinessCategoryId';

        /** Reserved for internal use. */
        const BusinessCategoryName = 'BusinessCategoryName';

        /** Reserved for internal use. */
        const BusinessListingId = 'BusinessListingId';

        /** Reserved for internal use. */
        const BusinessListingName = 'BusinessListingName';

        /** The Id element of a Campaign. */
        const CampaignId = 'CampaignId';

        /** The Name element of a Campaign. */
        const CampaignName = 'CampaignName';

        /** The number of phone calls initiated by clicks. */
        const ClickCalls = 'ClickCalls';

        /** The number of times that the ads in the account were clicked. */
        const Clicks = 'Clicks';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The cost per assist. */
        const CostPerAssist = 'CostPerAssist';

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
        const Ctr = 'Ctr';

        /** The CurrencyType element of an Account. */
        const CurrencyCode = 'CurrencyCode';

        /** The match type used to deliver an ad. */
        const DeliveredMatchType = 'DeliveredMatchType';

        /** The operating system of the device specified in the DeviceType column and corresponding to the OSNames element of a DeviceOSTargetBid. */
        const DeviceOS = 'DeviceOS';

        /** The DeviceName element of a DeviceOSTargetBid. */
        const DeviceType = 'DeviceType';

        /** Cost information that is optionally provided by advertisers, including non-advertising costs, taxes, and shipping. */
        const ExtendedCost = 'ExtendedCost';

        /** The numeric score that indicates the historic relevance of your keyword to the search term. */
        const HistoricKeywordRelevance = 'HistoricKeywordRelevance';

        /** The numeric score that indicates the historic relevance of your ad and landing page to the search term. */
        const HistoricLandingPageRelevance = 'HistoricLandingPageRelevance';

        /** The numeric score that is the aggregate assessment of the historic quality of all landing pages on your site. */
        const HistoricLandingPageUserExperience = 'HistoricLandingPageUserExperience';

        /** The historic quality score of the keyword. */
        const HistoricQualityScore = 'HistoricQualityScore';

        /** The percentage of time your ads would have been displayed to users, but were not because your bid was too low or your bid and quality score was below minimum thresholds, which prevented you from entering the auction. */
        const ImpressionLostToBidPercent = 'ImpressionLostToBidPercent';

        /** The percentage of time your ads would have been displayed to users, but were not because of a budget shortfall. */
        const ImpressionLostToBudgetPercent = 'ImpressionLostToBudgetPercent';

        /** The percentage of time your ads would have been displayed to users, but were not because your ad copy was not relevant to the user's search query. */
        const ImpressionLostToKeywordRelevancePercent = 'ImpressionLostToKeywordRelevancePercent';

        /** The percentage of time your ads would have been displayed to users, but were not due to one or both of the following reasons. */
        const ImpressionLostToLandingPageRelevancePercent = 'ImpressionLostToLandingPageRelevancePercent';

        /** The percentage of time your ads would have been displayed to users, but were not because your ads ranked too low in the auction. */
        const ImpressionLostToRankPercent = 'ImpressionLostToRankPercent';

        /** The number of times an ad has been displayed on search results pages. */
        const Impressions = 'Impressions';

        /** The percentage of time your ads were displayed to users who searched by keywords that matched your keywords and targeting selections. */
        const ImpressionSharePercent = 'ImpressionSharePercent';

        /** The numeric score that indicates the relevance of your keyword to the search term. */
        const KeywordRelevance = 'KeywordRelevance';

        /** The numeric score that indicates the relevance of your ad and landing page to the search query. */
        const LandingPageRelevance = 'LandingPageRelevance';

        /** The numeric score that is an aggregate assessment of the quality of all landing pages on your site. */
        const LandingPageUserExperience = 'LandingPageUserExperience';

        /** The Language element of an AdGroup. */
        const Language = 'Language';

        /** The number of calls dialed manually from any device to the tracked phone number. */
        const ManualCalls = 'ManualCalls';

        /** The Network element of an AdGroup. */
        const Network = 'Network';

        /** The number of total calls to the tracked phone number that showed with your ad. */
        const PhoneCalls = 'PhoneCalls';

        /** The number of times your tracked number was shown on all devices. */
        const PhoneImpressions = 'PhoneImpressions';

        /** The total cost for completed calls to your tracked number. */
        const PhoneSpend = 'PhoneSpend';

        /** The PricingModel element of an AdGroup. */
        const PricingModel = 'PricingModel';

        /** The phone-through rate (Ptr). */
        const Ptr = 'Ptr';

        /** The numeric score shows you how competitive your ads are in the marketplace by measuring how relevant your keywords and landing pages are to customers' search terms. */
        const QualityScore = 'QualityScore';

        /** The return on ad spend (ROAS). */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The revenue per assist. */
        const RevenuePerAssist = 'RevenuePerAssist';

        /** The revenue per conversion. */
        const RevenuePerConversion = 'RevenuePerConversion';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The current delivery status. */
        const Status = 'Status';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
        const TopVsOther = 'TopVsOther';

        /** The total cost for cost for click spend and phone call spend combined. */
        const TotalCostPhoneAndClicks = 'TotalCostPhoneAndClicks';
    }

    /**
     * Defines the ad group status values that you can use to filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/bb671991(v=msads.90).aspx AdGroupStatusReportFilter Value Set
     * 
     * @used-by AdGroupPerformanceReportFilter
     */
    final class AdGroupStatusReportFilter
    {
        /** The report will contain ad groups that are active. */
        const Active = 'Active';

        /** The report will contain ad groups that have been deleted. */
        const Deleted = 'Deleted';

        /** The report will contain ad groups that are in a draft state. */
        const Draft = 'Draft';

        /** The report will contain ad groups that have expired. */
        const Expired = 'Expired';

        /** The report will contain ad groups that are paused. */
        const Paused = 'Paused';

        /** The same meaning as Active. */
        const Submitted = 'Submitted';
    }

    /**
     * Defines the attributes and performance statistics columns that you can include in the AdPerformanceReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/bb671923(v=msads.90).aspx AdPerformanceReportColumn Value Set
     * 
     * @used-by AdPerformanceReportRequest
     */
    final class AdPerformanceReportColumn
    {
        /** The Id element of an Account. */
        const AccountId = 'AccountId';

        /** The Name element of an Account. */
        const AccountName = 'AccountName';

        /** The Number element of an Account. */
        const AccountNumber = 'AccountNumber';

        /** The Text element of a MobileAd or TextAd. */
        const AdDescription = 'AdDescription';

        /** The AdDistribution element of an AdGroup. */
        const AdDistribution = 'AdDistribution';

        /** The Id element of an AdGroup. */
        const AdGroupId = 'AdGroupId';

        /** The Name element of an AdGroup. */
        const AdGroupName = 'AdGroupName';

        /** The Id element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
        const AdId = 'AdId';

        /** The Status element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
        const AdStatus = 'AdStatus';

        /** The Title element of a MobileAd or TextAd. */
        const AdTitle = 'AdTitle';

        /** The Type element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
        const AdType = 'AdType';

        /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
        const Assists = 'Assists';

        /** The average cost per click (CPC). */
        const AverageCpc = 'AverageCpc';

        /** The average of the cost-per-thousand impressions of the ads. */
        const AverageCpm = 'AverageCpm';

        /** The average position of the ad on a webpage. */
        const AveragePosition = 'AveragePosition';

        /** The MatchType element of a Keyword. */
        const BidMatchType = 'BidMatchType';

        /** Reserved for internal use. */
        const BusinessCategoryId = 'BusinessCategoryId';

        /** Reserved for internal use. */
        const BusinessCategoryName = 'BusinessCategoryName';

        /** Reserved for internal use. */
        const BusinessListingId = 'BusinessListingId';

        /** Reserved for internal use. */
        const BusinessListingName = 'BusinessListingName';

        /** The Id element of a Campaign. */
        const CampaignId = 'CampaignId';

        /** The Name element of a Campaign. */
        const CampaignName = 'CampaignName';

        /** The number of times that the ads in the account were clicked. */
        const Clicks = 'Clicks';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The cost per assist. */
        const CostPerAssist = 'CostPerAssist';

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
        const Ctr = 'Ctr';

        /** The CurrencyType element of an Account. */
        const CurrencyCode = 'CurrencyCode';

        /** The match type used to deliver an ad. */
        const DeliveredMatchType = 'DeliveredMatchType';

        /** The DestinationUrl element of the TextAd, MobileAd, Keyword, or BiddableAdGroupCriterion. */
        const DestinationUrl = 'DestinationUrl';

        /** The operating system of the device specified in the DeviceType column and corresponding to the OSNames element of a DeviceOSTargetBid. */
        const DeviceOS = 'DeviceOS';

        /** The DeviceName element of a DeviceOSTargetBid. */
        const DeviceType = 'DeviceType';

        /** The DisplayUrl element of a MobileAd or TextAd. */
        const DisplayUrl = 'DisplayUrl';

        /** Cost information that is optionally provided by advertisers, including non-advertising costs, taxes, and shipping. */
        const ExtendedCost = 'ExtendedCost';

        /** The number of times an ad has been displayed on search results pages. */
        const Impressions = 'Impressions';

        /** The Language element of an AdGroup. */
        const Language = 'Language';

        /** The Network element of an AdGroup. */
        const Network = 'Network';

        /** The PricingModel element of an AdGroup. */
        const PricingModel = 'PricingModel';

        /** The return on ad spend (ROAS). */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The revenue per assist. */
        const RevenuePerAssist = 'RevenuePerAssist';

        /** The revenue per conversion. */
        const RevenuePerConversion = 'RevenuePerConversion';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
        const TopVsOther = 'TopVsOther';
    }

    /**
     * Defines the attributes and performance statistics columns that you can include in the RichAdComponentPerformanceReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/hh180149(v=msads.90).aspx RichAdComponentPerformanceReportColumn Value Set
     * 
     * @used-by RichAdComponentPerformanceReportRequest
     */
    final class RichAdComponentPerformanceReportColumn
    {
        /** The Id element of an Account. */
        const AccountId = 'AccountId';

        /** The Name element of an Account. */
        const AccountName = 'AccountName';

        /** The Number element of an Account. */
        const AccountNumber = 'AccountNumber';

        /** The Id element of an AdGroup. */
        const AdGroupId = 'AdGroupId';

        /** The Name element of an AdGroup. */
        const AdGroupName = 'AdGroupName';

        /** The Id element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
        const AdId = 'AdId';

        /** The Title element of a MobileAd or TextAd. */
        const AdTitle = 'AdTitle';

        /** The Id element of a Campaign. */
        const CampaignId = 'CampaignId';

        /** The Name element of a Campaign. */
        const CampaignName = 'CampaignName';

        /** The number of billable clicks of a rich ad. */
        const ComponentClicks = 'ComponentClicks';

        /** The click-through rate of all components of the ad that were clicked. */
        const ComponentCTR = 'ComponentCTR';

        /** The destination URL of the rich ad component. */
        const ComponentDestinationURL = 'ComponentDestinationURL';

        /** The number of clicks that occur on different components of the ad after the first click but within the short, system-defined interval. */
        const ComponentNonBillableClicks = 'ComponentNonBillableClicks';

        /** The title of the rich ad component. */
        const ComponentTitle = 'ComponentTitle';

        /** The number of times that all components of the ad were clicked. */
        const ComponentTotalClicks = 'ComponentTotalClicks';

        /** The component type of the rich ad that was clicked. */
        const ComponentType = 'ComponentType';

        /** The rich ad component type. */
        const RichAdSubType = 'RichAdSubType';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';
    }

    /**
     * Defines the possible components of a rich ad that you can use to filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/hh180146(v=msads.90).aspx ComponentTypeFilter Value Set
     * 
     * @used-by RichAdComponentPerformanceReportFilter
     */
    final class ComponentTypeFilter
    {
        /** The title of the ad that contains a hyperlink to a destination URL. */
        const Basic = 'Basic';

        /** A hyperlink to a webpage inside the destination website. */
        const Deeplink = 'Deeplink';

        /** The icon that displays next to the display URL. */
        const FavoriteIcon = 'FavoriteIcon';

        /** An entry form on the ad that gathers data from the user. */
        const Form = 'Form';

        /** An image in the ad that contains a hyperlink to a destination URL. */
        const Image = 'Image';

        /** A link in a pharmaceutical ad that links to additional drug information. */
        const TitledLink = 'TitledLink';
        const Unknown = 'Unknown';

        /** A video embedded in the ad that the user can click to play. */
        const Video = 'Video';
    }

    /**
     * Defines the rich ad types that you can use to filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/hh180148(v=msads.90).aspx RichAdSubTypeFilter Value Set
     * 
     * @used-by RichAdComponentPerformanceReportFilter
     */
    final class RichAdSubTypeFilter
    {
        /** An ad that can contain one video, a maximum of two deep links, and an input form. */
        const Rais1Video2Links1Form = 'Rais1Video2Links1Form';

        /** An ad that can contain one video and a maximum of four deep links. */
        const Rais1Video4Links = 'Rais1Video4Links';

        /** An ad that can contain a maximum of two images, two deep links, and an input form. */
        const Rais2Images2Links1Form = 'Rais2Images2Links1Form';

        /** An ad that can contain a maximum of two images and four deep links. */
        const Rais2Images4Links = 'Rais2Images4Links';

        /** An ad that can contain a maximum of four deep links. */
        const Rais4Links = 'Rais4Links';

        /** A Bing Shopping ad. */
        const RaisBingShopping = 'RaisBingShopping';

        /** A pharmaceutical ad. */
        const RaisPharma = 'RaisPharma';
    }

    /**
     * Defines the attributes and performance statistics columns that you can include in the KeywordPerformanceReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/bb672087(v=msads.90).aspx KeywordPerformanceReportColumn Value Set
     * 
     * @used-by KeywordPerformanceReportRequest
     * @used-by KeywordPerformanceReportSort
     */
    final class KeywordPerformanceReportColumn
    {
        /** The Id element of an Account. */
        const AccountId = 'AccountId';

        /** The Name element of an Account. */
        const AccountName = 'AccountName';

        /** The Number element of an Account. */
        const AccountNumber = 'AccountNumber';

        /** The AccountLifeCycleStatus element of an Account. */
        const AccountStatus = 'AccountStatus';

        /** The AdDistribution element of an AdGroup. */
        const AdDistribution = 'AdDistribution';

        /** The Id element of an AdGroup. */
        const AdGroupId = 'AdGroupId';

        /** The Name element of an AdGroup. */
        const AdGroupName = 'AdGroupName';

        /** The Status element of an AdGroup. */
        const AdGroupStatus = 'AdGroupStatus';

        /** The Id element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
        const AdId = 'AdId';

        /** The Type element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
        const AdType = 'AdType';

        /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
        const Assists = 'Assists';

        /** The average cost per click (CPC). */
        const AverageCpc = 'AverageCpc';

        /** The average of the cost-per-thousand impressions of the ads. */
        const AverageCpm = 'AverageCpm';

        /** The average position of the ad on a webpage. */
        const AveragePosition = 'AveragePosition';

        /** The MatchType element of a Keyword. */
        const BidMatchType = 'BidMatchType';

        /** Reserved for internal use. */
        const BusinessCategoryId = 'BusinessCategoryId';

        /** Reserved for internal use. */
        const BusinessCategoryName = 'BusinessCategoryName';

        /** Reserved for internal use. */
        const BusinessListingId = 'BusinessListingId';

        /** Reserved for internal use. */
        const BusinessListingName = 'BusinessListingName';

        /** The Id element of a Campaign. */
        const CampaignId = 'CampaignId';

        /** The Name element of a Campaign. */
        const CampaignName = 'CampaignName';

        /** The Status element of a Campaign. */
        const CampaignStatus = 'CampaignStatus';

        /** The number of times that the ads in the account were clicked. */
        const Clicks = 'Clicks';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The cost per assist. */
        const CostPerAssist = 'CostPerAssist';

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
        const Ctr = 'Ctr';

        /** The CurrencyType element of an Account. */
        const CurrencyCode = 'CurrencyCode';

        /** The maximum cost per click. */
        const CurrentMaxCpc = 'CurrentMaxCpc';

        /** The match type used to deliver an ad. */
        const DeliveredMatchType = 'DeliveredMatchType';

        /** The DestinationUrl element of the TextAd, MobileAd, Keyword, or BiddableAdGroupCriterion. */
        const DestinationUrl = 'DestinationUrl';

        /** The operating system of the device specified in the DeviceType column and corresponding to the OSNames element of a DeviceOSTargetBid. */
        const DeviceOS = 'DeviceOS';

        /** The DeviceName element of a DeviceOSTargetBid. */
        const DeviceType = 'DeviceType';

        /** Cost information that is optionally provided by advertisers, including non-advertising costs, taxes, and shipping. */
        const ExtendedCost = 'ExtendedCost';

        /** The numeric score that indicates the historic relevance of your keyword to the search term. */
        const HistoricKeywordRelevance = 'HistoricKeywordRelevance';

        /** The numeric score that indicates the historic relevance of your ad and landing page to the search term. */
        const HistoricLandingPageRelevance = 'HistoricLandingPageRelevance';

        /** The numeric score that is the aggregate assessment of the historic quality of all landing pages on your site. */
        const HistoricLandingPageUserExperience = 'HistoricLandingPageUserExperience';

        /** The historic quality score of the keyword. */
        const HistoricQualityScore = 'HistoricQualityScore';

        /** The number of times an ad has been displayed on search results pages. */
        const Impressions = 'Impressions';

        /** The Text element of a Keyword. */
        const Keyword = 'Keyword';

        /** The Id element of a Keyword. */
        const KeywordId = 'KeywordId';

        /** An identifier that uniquely identifies the keyword and match-type combination. */
        const KeywordMatchTypeId = 'KeywordMatchTypeId';

        /** The numeric score that indicates the relevance of your keyword to the search term. */
        const KeywordRelevance = 'KeywordRelevance';

        /** The Status element of a Keyword. */
        const KeywordStatus = 'KeywordStatus';

        /** The numeric score that indicates the relevance of your ad and landing page to the search query. */
        const LandingPageRelevance = 'LandingPageRelevance';

        /** The numeric score that is an aggregate assessment of the quality of all landing pages on your site. */
        const LandingPageUserExperience = 'LandingPageUserExperience';

        /** The Language element of an AdGroup. */
        const Language = 'Language';

        /** The Network element of an AdGroup. */
        const Network = 'Network';

        /** The PricingModel element of an AdGroup. */
        const PricingModel = 'PricingModel';

        /** The numeric score that indicates the possible increase in the number of impressions that the keyword could receive if the corresponding QualityScore column would rise above underperforming. */
        const QualityImpact = 'QualityImpact';

        /** The numeric score shows you how competitive your ads are in the marketplace by measuring how relevant your keywords and landing pages are to customers' search terms. */
        const QualityScore = 'QualityScore';

        /** The return on ad spend (ROAS). */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The revenue per assist. */
        const RevenuePerAssist = 'RevenuePerAssist';

        /** The revenue per conversion. */
        const RevenuePerConversion = 'RevenuePerConversion';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
        const TopVsOther = 'TopVsOther';
    }

    /**
     * Defines the bid match type values that you can use to filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/ff728812(v=msads.90).aspx BidMatchTypeReportFilter Value Set
     * 
     * @used-by KeywordPerformanceReportFilter
     * @used-by ShareOfVoiceReportFilter
     */
    final class BidMatchTypeReportFilter
    {
        /** The report will contain keywords that set a bid value for the broad match type. */
        const Broad = 'Broad';

        /** The report will contain keywords that set a bid value for the content match type. */
        const Content = 'Content';

        /** The report will contain keywords that set a bid value for the exact match type. */
        const Exact = 'Exact';

        /** The report will contain keywords that set a bid value for the phrase match type. */
        const Phrase = 'Phrase';
    }

    /**
     * Defines the ascending or descending sort order of values within the specified report column.
     * @link http://msdn.microsoft.com/en-us/library/dn342800(v=msads.90).aspx SortOrder Value Set
     * 
     * @used-by KeywordPerformanceReportSort
     */
    final class SortOrder
    {
        const Ascending = 'Ascending';
        const Descending = 'Descending';
    }

    /**
     * Defines the attributes and performance statistics columns that you can include in the DestinationUrlPerformanceReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/bb671820(v=msads.90).aspx DestinationUrlPerformanceReportColumn Value Set
     * 
     * @used-by DestinationUrlPerformanceReportRequest
     */
    final class DestinationUrlPerformanceReportColumn
    {
        const AccountId = 'AccountId';

        /** The Name element of an Account. */
        const AccountName = 'AccountName';

        /** The Number element of an Account. */
        const AccountNumber = 'AccountNumber';

        /** The AdDistribution element of an AdGroup. */
        const AdDistribution = 'AdDistribution';

        /** The Id element of an AdGroup. */
        const AdGroupId = 'AdGroupId';

        /** The Name element of an AdGroup. */
        const AdGroupName = 'AdGroupName';

        /** The Id element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
        const AdId = 'AdId';

        /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
        const Assists = 'Assists';

        /** The average cost per click (CPC). */
        const AverageCpc = 'AverageCpc';

        /** The average of the cost-per-thousand impressions of the ads. */
        const AverageCpm = 'AverageCpm';

        /** The average position of the ad on a webpage. */
        const AveragePosition = 'AveragePosition';

        /** The MatchType element of a Keyword. */
        const BidMatchType = 'BidMatchType';

        /** The Id element of a Campaign. */
        const CampaignId = 'CampaignId';

        /** The Name element of a Campaign. */
        const CampaignName = 'CampaignName';

        /** The number of times that the ads in the account were clicked. */
        const Clicks = 'Clicks';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The cost per assist. */
        const CostPerAssist = 'CostPerAssist';

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
        const Ctr = 'Ctr';

        /** The CurrencyType element of an Account. */
        const CurrencyCode = 'CurrencyCode';

        /** The match type used to deliver an ad. */
        const DeliveredMatchType = 'DeliveredMatchType';

        /** The DestinationUrl element of the TextAd, MobileAd, Keyword, or BiddableAdGroupCriterion. */
        const DestinationUrl = 'DestinationUrl';

        /** The operating system of the device specified in the DeviceType column and corresponding to the OSNames element of a DeviceOSTargetBid. */
        const DeviceOS = 'DeviceOS';

        /** The DeviceName element of a DeviceOSTargetBid. */
        const DeviceType = 'DeviceType';

        /** Cost information that is optionally provided by advertisers, including non-advertising costs, taxes, and shipping. */
        const ExtendedCost = 'ExtendedCost';

        /** The number of times an ad has been displayed on search results pages. */
        const Impressions = 'Impressions';

        /** The Language element of an AdGroup. */
        const Language = 'Language';

        /** The Network element of an AdGroup. */
        const Network = 'Network';

        /** The PricingModel element of an AdGroup. */
        const PricingModel = 'PricingModel';

        /** The return on ad spend (ROAS). */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The revenue per assist. */
        const RevenuePerAssist = 'RevenuePerAssist';

        /** The revenue per conversion. */
        const RevenuePerConversion = 'RevenuePerConversion';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
        const TopVsOther = 'TopVsOther';
    }

    /**
     * Defines the attributes and performance statistics columns that you can include in the BudgetSummaryReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/bb671925(v=msads.90).aspx BudgetSummaryReportColumn Value Set
     * 
     * @used-by BudgetSummaryReportRequest
     */
    final class BudgetSummaryReportColumn
    {
        /** The Id element of an Account. */
        const AccountId = 'AccountId';

        /** The Name element of an Account. */
        const AccountName = 'AccountName';

        /** The Number element of an Account. */
        const AccountNumber = 'AccountNumber';

        /** The Id element of a Campaign. */
        const CampaignId = 'CampaignId';

        /** The Name element of a Campaign. */
        const CampaignName = 'CampaignName';

        /** The CurrencyType element of an Account. */
        const CurrencyCode = 'CurrencyCode';

        /** Your budgeted amount of money to spend per day. */
        const DailySpend = 'DailySpend';

        /** The date for the downloaded report records. */
        const Date = 'Date';

        /** The budgeted amount of money to spend per month. */
        const MonthlyBudget = 'MonthlyBudget';

        /** The amount of money spent to date for the month. */
        const MonthToDateSpend = 'MonthToDateSpend';
    }

    /**
     * Defines the predefined time and date range values for a budget summary report request.
     * @link http://msdn.microsoft.com/en-us/library/bb671612(v=msads.90).aspx BudgetSummaryReportTimePeriod Value Set
     * 
     * @used-by BudgetSummaryReportTime
     */
    final class BudgetSummaryReportTimePeriod
    {
        /** A cumulative report for the previous calendar month. */
        const LastMonth = 'LastMonth';

        /** A cumulative report for the previous seven days, having one row for each day. */
        const LastSevenDays = 'LastSevenDays';

        /** A cumulative report for the current calendar month. */
        const ThisMonth = 'ThisMonth';

        /** A cumulative report for the current day. */
        const Today = 'Today';

        /** A cumulative report for the previous day. */
        const Yesterday = 'Yesterday';
    }

    /**
     * Defines the attributes and performance statistics columns that you can include in the AgeGenderDemographicReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/bb671786(v=msads.90).aspx AgeGenderDemographicReportColumn Value Set
     * 
     * @used-by AgeGenderDemographicReportRequest
     */
    final class AgeGenderDemographicReportColumn
    {
        /** The Id element of an Account. */
        const AccountId = 'AccountId';

        /** The Name element of an Account. */
        const AccountName = 'AccountName';

        /** The Number element of an Account. */
        const AccountNumber = 'AccountNumber';

        /** The AdDistribution element of an AdGroup. */
        const AdDistribution = 'AdDistribution';

        /** The Id element of an AdGroup. */
        const AdGroupId = 'AdGroupId';

        /** The Name element of an AdGroup. */
        const AdGroupName = 'AdGroupName';

        /** The age group of the audience who might have viewed the ad, if known. */
        const AgeGroup = 'AgeGroup';

        /** The Id element of a Campaign. */
        const CampaignId = 'CampaignId';

        /** The Name element of a Campaign. */
        const CampaignName = 'CampaignName';

        /** The estimated number of times that an ad will be clicked by a particular age group or gender. */
        const EstimatedClickPercent = 'EstimatedClickPercent';

        /** The estimated click-through rate (Ctr) as a percentage. */
        const EstimatedCtr = 'EstimatedCtr';

        /** The estimated number of times that an ad could be served to a particular age group or gender. */
        const EstimatedImpressionPercent = 'EstimatedImpressionPercent';

        /** The gender of the audience who might have viewed the ad, if known. */
        const Gender = 'Gender';

        /** The Language element of an AdGroup. */
        const Language = 'Language';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';
    }

    /**
     * Defines the attributes and performance statistics columns that you can include in the GeographicalLocationReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/dn411634(v=msads.90).aspx GeographicalLocationReportColumn Value Set
     * 
     * @used-by GeographicalLocationReportRequest
     */
    final class GeographicalLocationReportColumn
    {
        /** The Id element of an Account. */
        const AccountId = 'AccountId';

        /** The Name element of an Account. */
        const AccountName = 'AccountName';

        /** The Number element of an Account. */
        const AccountNumber = 'AccountNumber';

        /** The AdDistribution element of an AdGroup. */
        const AdDistribution = 'AdDistribution';

        /** The Id element of an AdGroup. */
        const AdGroupId = 'AdGroupId';

        /** The Name element of an AdGroup. */
        const AdGroupName = 'AdGroupName';

        /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
        const Assists = 'Assists';

        /** The average cost per click (CPC). */
        const AverageCpc = 'AverageCpc';

        /** The average of the cost-per-thousand impressions of the ads. */
        const AverageCpm = 'AverageCpm';

        /** The average position of the ad on a webpage. */
        const AveragePosition = 'AveragePosition';

        /** The MatchType element of a Keyword. */
        const BidMatchType = 'BidMatchType';

        /** The Id element of a Campaign. */
        const CampaignId = 'CampaignId';

        /** The Name element of a Campaign. */
        const CampaignName = 'CampaignName';

        /** The city where the user was physically located when they clicked the ad. */
        const City = 'City';

        /** The number of times that the ads in the account were clicked. */
        const Clicks = 'Clicks';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The cost per assist. */
        const CostPerAssist = 'CostPerAssist';

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** The country where the user was physically located when they clicked the ad. */
        const Country = 'Country';

        /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
        const Ctr = 'Ctr';

        /** The CurrencyType element of an Account. */
        const CurrencyCode = 'CurrencyCode';

        /** The match type used to deliver an ad. */
        const DeliveredMatchType = 'DeliveredMatchType';

        /** The operating system of the device specified in the DeviceType column and corresponding to the OSNames element of a DeviceOSTargetBid. */
        const DeviceOS = 'DeviceOS';

        /** The DeviceName element of a DeviceOSTargetBid. */
        const DeviceType = 'DeviceType';

        /** Cost information that is optionally provided by advertisers, including non-advertising costs, taxes, and shipping. */
        const ExtendedCost = 'ExtendedCost';

        /** The number of times an ad has been displayed on search results pages. */
        const Impressions = 'Impressions';

        /** The Language element of an AdGroup. */
        const Language = 'Language';

        /** The metropolitan area where the user was physically located when they clicked the ad. */
        const MetroArea = 'MetroArea';

        /** The Network element of an AdGroup. */
        const Network = 'Network';

        /** The Name element of a RadiusTargetBid. */
        const ProximityTargetLocation = 'ProximityTargetLocation';

        /** The name of a city if the user's geographical intent can be determined. */
        const QueryIntentCity = 'QueryIntentCity';

        /** The name of a country if the user's geographical intent can be determined. */
        const QueryIntentCountry = 'QueryIntentCountry';

        /** The name of a metro area if the user's geographical intent can be determined. */
        const QueryIntentDMA = 'QueryIntentDMA';

        /** The name of a state if the user's geographical intent can be determined. */
        const QueryIntentState = 'QueryIntentState';

        /** The Radius element of a RadiusTargetBid. */
        const Radius = 'Radius';

        /** The return on ad spend (ROAS). */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The revenue per assist. */
        const RevenuePerAssist = 'RevenuePerAssist';

        /** The revenue per conversion. */
        const RevenuePerConversion = 'RevenuePerConversion';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The state or province where the user was physically located when they clicked the ad. */
        const State = 'State';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
        const TopVsOther = 'TopVsOther';
    }

    /**
     * Defines the attributes and performance statistics columns that you can include in the PublisherUsagePerformanceReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/dd797159(v=msads.90).aspx PublisherUsagePerformanceReportColumn Value Set
     * 
     * @used-by PublisherUsagePerformanceReportRequest
     */
    final class PublisherUsagePerformanceReportColumn
    {
        /** The Id element of an Account. */
        const AccountId = 'AccountId';

        /** The Name element of an Account. */
        const AccountName = 'AccountName';

        /** The Number element of an Account. */
        const AccountNumber = 'AccountNumber';

        /** The AdDistribution element of an AdGroup. */
        const AdDistribution = 'AdDistribution';

        /** The Id element of an AdGroup. */
        const AdGroupId = 'AdGroupId';

        /** The Name element of an AdGroup. */
        const AdGroupName = 'AdGroupName';

        /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
        const Assists = 'Assists';

        /** The average cost per click (CPC). */
        const AverageCpc = 'AverageCpc';

        /** The average of the cost-per-thousand impressions of the ads. */
        const AverageCpm = 'AverageCpm';

        /** The average position of the ad on a webpage. */
        const AveragePosition = 'AveragePosition';

        /** The MatchType element of a Keyword. */
        const BidMatchType = 'BidMatchType';

        /** The Id element of a Campaign. */
        const CampaignId = 'CampaignId';

        /** The Name element of a Campaign. */
        const CampaignName = 'CampaignName';

        /** The number of times that the ads in the account were clicked. */
        const Clicks = 'Clicks';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The cost per assist. */
        const CostPerAssist = 'CostPerAssist';

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
        const Ctr = 'Ctr';

        /** The CurrencyType element of an Account. */
        const CurrencyCode = 'CurrencyCode';

        /** The match type used to deliver an ad. */
        const DeliveredMatchType = 'DeliveredMatchType';

        /** The operating system of the device specified in the DeviceType column and corresponding to the OSNames element of a DeviceOSTargetBid. */
        const DeviceOS = 'DeviceOS';

        /** The DeviceName element of a DeviceOSTargetBid. */
        const DeviceType = 'DeviceType';

        /** Cost information that is optionally provided by advertisers, including non-advertising costs, taxes, and shipping. */
        const ExtendedCost = 'ExtendedCost';

        /** The number of times an ad has been displayed on search results pages. */
        const Impressions = 'Impressions';

        /** The Language element of an AdGroup. */
        const Language = 'Language';

        /** The Network element of an AdGroup. */
        const Network = 'Network';

        /** The PricingModel element of an AdGroup. */
        const PricingModel = 'PricingModel';

        /** The URL of the website that displayed the ad. */
        const PublisherUrl = 'PublisherUrl';

        /** The return on ad spend (ROAS). */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The revenue per assist. */
        const RevenuePerAssist = 'RevenuePerAssist';

        /** The revenue per conversion. */
        const RevenuePerConversion = 'RevenuePerConversion';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
        const TopVsOther = 'TopVsOther';
    }

    /**
     * Defines the pricing model values that you can use to filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/dn411635(v=msads.90).aspx PricingModelReportFilter Value Set
     * 
     * @used-by PublisherUsagePerformanceReportFilter
     */
    final class PricingModelReportFilter
    {
        /** The report will include ad groups with a cost per click (CPC) pricing model. */
        const Cpc = 'Cpc';

        /** The report will include ad groups with a cost per thousand impressions (CPM) pricing model. */
        const Cpm = 'Cpm';
    }

    /**
     * Defines the aggregation values that you can use in a search query performance report.
     * @link http://msdn.microsoft.com/en-us/library/ee703960(v=msads.90).aspx SearchQueryReportAggregation Value Set
     * 
     * @used-by SearchQueryPerformanceReportRequest
     */
    final class SearchQueryReportAggregation
    {
        /** The report data will be aggregated for each day. */
        const Daily = 'Daily';

        /** The report data will be aggregated by each of the seven days in a week. */
        const DayOfWeek = 'DayOfWeek';

        /** The report data will be aggregated for each hour. */
        const Hourly = 'Hourly';

        /** The report data will be aggregated by each of the 24 hours in a day. */
        const HourOfDay = 'HourOfDay';

        /** The report data will be aggregated for each month. */
        const Monthly = 'Monthly';

        /** The report data will be aggregated for the entire specified report time. */
        const Summary = 'Summary';

        /** The report data will be aggregated for each week. */
        const Weekly = 'Weekly';

        /** The report data will be aggregated for each year. */
        const Yearly = 'Yearly';
    }

    /**
     * Defines the attributes and performance statistics columns that you can include in the SearchQueryPerformanceReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/ee703958(v=msads.90).aspx SearchQueryPerformanceReportColumn Value Set
     * 
     * @used-by SearchQueryPerformanceReportRequest
     */
    final class SearchQueryPerformanceReportColumn
    {
        /** The Id element of an Account. */
        const AccountId = 'AccountId';

        /** The Name element of an Account. */
        const AccountName = 'AccountName';

        /** The Number element of an Account. */
        const AccountNumber = 'AccountNumber';

        /** The Id element of an AdGroupCriterion, which is a product target. */
        const AdGroupCriterionId = 'AdGroupCriterionId';

        /** The Id element of an AdGroup. */
        const AdGroupId = 'AdGroupId';

        /** The Name element of an AdGroup. */
        const AdGroupName = 'AdGroupName';

        /** The Id element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
        const AdId = 'AdId';

        /** The Status element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
        const AdStatus = 'AdStatus';

        /** The Type element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
        const AdType = 'AdType';

        /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
        const Assists = 'Assists';

        /** The average cost per click (CPC). */
        const AverageCpc = 'AverageCpc';

        /** The average position of the ad on a webpage. */
        const AveragePosition = 'AveragePosition';

        /** The MatchType element of a Keyword. */
        const BidMatchType = 'BidMatchType';

        /** The Id element of a Campaign. */
        const CampaignId = 'CampaignId';

        /** The Name element of a Campaign. */
        const CampaignName = 'CampaignName';

        /** The Status element of a Campaign. */
        const CampaignStatus = 'CampaignStatus';

        /** The number of times that the ads in the account were clicked. */
        const Clicks = 'Clicks';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The cost per assist. */
        const CostPerAssist = 'CostPerAssist';

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
        const Ctr = 'Ctr';

        /** The match type used to deliver an ad. */
        const DeliveredMatchType = 'DeliveredMatchType';

        /** The DestinationUrl element of the TextAd, MobileAd, Keyword, or BiddableAdGroupCriterion. */
        const DestinationUrl = 'DestinationUrl';

        /** The operating system of the device specified in the DeviceType column and corresponding to the OSNames element of a DeviceOSTargetBid. */
        const DeviceOS = 'DeviceOS';

        /** The DeviceName element of a DeviceOSTargetBid. */
        const DeviceType = 'DeviceType';

        /** Cost information that is optionally provided by advertisers, including non-advertising costs, taxes, and shipping. */
        const ExtendedCost = 'ExtendedCost';

        /** The number of times an ad has been displayed on search results pages. */
        const Impressions = 'Impressions';

        /** The Text element of a Keyword. */
        const Keyword = 'Keyword';

        /** The Id element of a Keyword. */
        const KeywordId = 'KeywordId';

        /** The Language element of an AdGroup. */
        const Language = 'Language';

        /** The Network element of an AdGroup. */
        const Network = 'Network';

        /** The name of the product target. */
        const ProductTarget = 'ProductTarget';

        /** The return on ad spend (ROAS). */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The revenue per assist. */
        const RevenuePerAssist = 'RevenuePerAssist';

        /** The revenue per conversion. */
        const RevenuePerConversion = 'RevenuePerConversion';

        /** The search term used by your potential audience. */
        const SearchQuery = 'SearchQuery';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
        const TopVsOther = 'TopVsOther';
    }

    /**
     * Defines the ad status values that you can use to filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/hh560533(v=msads.90).aspx AdStatusReportFilter Value Set
     * 
     * @used-by SearchQueryPerformanceReportFilter
     */
    final class AdStatusReportFilter
    {
        /** The report will contain ads that are active. */
        const Active = 'Active';

        /** The report will contain ads that have been deleted. */
        const Deleted = 'Deleted';

        /** The report will contain ads that are pending editorial review. */
        const Pending = 'Pending';

        /** The report will contain ads that have been rejected by editorial review. */
        const Rejected = 'Rejected';

        /** The same meaning as Active. */
        const Submitted = 'Submitted';
    }

    /**
     * Defines the attributes and performance statistics columns that you can include in the ConversionPerformanceReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/gg262852(v=msads.90).aspx ConversionPerformanceReportColumn Value Set
     * 
     * @used-by ConversionPerformanceReportRequest
     */
    final class ConversionPerformanceReportColumn
    {
        /** The Id element of an Account. */
        const AccountId = 'AccountId';

        /** The Name element of an Account. */
        const AccountName = 'AccountName';

        /** The Number element of an Account. */
        const AccountNumber = 'AccountNumber';

        /** The Id element of an AdGroup. */
        const AdGroupId = 'AdGroupId';

        /** The Name element of an AdGroup. */
        const AdGroupName = 'AdGroupName';

        /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
        const Assists = 'Assists';

        /** The Id element of a Campaign. */
        const CampaignId = 'CampaignId';

        /** The Name element of a Campaign. */
        const CampaignName = 'CampaignName';

        /** The number of times that the ads in the account were clicked. */
        const Clicks = 'Clicks';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The cost per assist. */
        const CostPerAssist = 'CostPerAssist';

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
        const Ctr = 'Ctr';

        /** The DeviceName element of a DeviceOSTargetBid. */
        const DeviceType = 'DeviceType';

        /** Cost information that is optionally provided by advertisers, including non-advertising costs, taxes, and shipping. */
        const ExtendedCost = 'ExtendedCost';

        /** The number of times an ad has been displayed on search results pages. */
        const Impressions = 'Impressions';

        /** The Text element of a Keyword. */
        const Keyword = 'Keyword';

        /** The Id element of a Keyword. */
        const KeywordId = 'KeywordId';

        /** The return on ad spend (ROAS). */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The revenue per assist. */
        const RevenuePerAssist = 'RevenuePerAssist';

        /** The revenue per conversion. */
        const RevenuePerConversion = 'RevenuePerConversion';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';
    }

    /**
     * Defines the attributes and performance statistics columns that you can include in the GoalsAndFunnelsReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/gg262845(v=msads.90).aspx GoalsAndFunnelsReportColumn Value Set
     * 
     * @used-by GoalsAndFunnelsReportRequest
     */
    final class GoalsAndFunnelsReportColumn
    {
        /** The Id element of an Account. */
        const AccountId = 'AccountId';

        /** The Name element of an Account. */
        const AccountName = 'AccountName';

        /** The Number element of an Account. */
        const AccountNumber = 'AccountNumber';

        /** The Id element of an AdGroup. */
        const AdGroupId = 'AdGroupId';

        /** The Name element of an AdGroup. */
        const AdGroupName = 'AdGroupName';

        /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
        const Assists = 'Assists';

        /** The Id element of a Campaign. */
        const CampaignId = 'CampaignId';

        /** The Name element of a Campaign. */
        const CampaignName = 'CampaignName';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** Cost information that is optionally provided by advertisers, including non-advertising costs, taxes, and shipping. */
        const ExtendedCost = 'ExtendedCost';

        /** The funnel conversion rate is the percent of conversions completed by users who at minimum visited the webpage corresponding to step 1 of your goal. */
        const FunnelConversionRate = 'FunnelConversionRate';

        /** The name of the campaign analytics goal for tracking potential land, browse, prospect, and conversion steps. */
        const Goal = 'Goal';

        /** The Text element of a Keyword. */
        const Keyword = 'Keyword';

        /** The Id element of a Keyword. */
        const KeywordId = 'KeywordId';

        /** The return on ad spend (ROAS). */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The number of times that a user entered step 1 of the funnel. */
        const Step1Count = 'Step1Count';

        /** The number of times that a user entered step 2 of the funnel. */
        const Step2Count = 'Step2Count';

        /** The number of times that a user entered step 3 of the funnel. */
        const Step3Count = 'Step3Count';

        /** The number of times that a user entered step 1 of the funnel. */
        const Step4Count = 'Step4Count';

        /** The number of times that a user entered step 1 of the funnel. */
        const Step5Count = 'Step5Count';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';
    }

    /**
     * Defines the attributes and performance statistics columns that you can include in the TrafficSourcesReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/gg262847(v=msads.90).aspx TrafficSourcesReportColumn Value Set
     * 
     * @used-by TrafficSourcesReportRequest
     */
    final class TrafficSourcesReportColumn
    {
        /** The Id element of an Account. */
        const AccountId = 'AccountId';

        /** The Name element of an Account. */
        const AccountName = 'AccountName';

        /** The Number element of an Account. */
        const AccountNumber = 'AccountNumber';

        /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
        const Assists = 'Assists';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The funnel conversion rate is the percent of conversions completed by users who at minimum visited the webpage corresponding to step 1 of your goal. */
        const FunnelConversionRate = 'FunnelConversionRate';

        /** The name of the campaign analytics goal for tracking potential land, browse, prospect, and conversion steps. */
        const Goal = 'Goal';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The revenue per conversion. */
        const RevenuePerConversion = 'RevenuePerConversion';

        /** The origin of the advertising traffic, which is one of the following: */
        const Source = 'Source';

        /** The number of times that a user entered step 1 of the funnel. */
        const Step1Count = 'Step1Count';

        /** The number of times that a user entered step 2 of the funnel. */
        const Step2Count = 'Step2Count';

        /** The number of times that a user entered step 3 of the funnel. */
        const Step3Count = 'Step3Count';

        /** The number of times that a user entered step 1 of the funnel. */
        const Step4Count = 'Step4Count';

        /** The number of times that a user entered step 1 of the funnel. */
        const Step5Count = 'Step5Count';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';
    }

    /**
     * Defines the attributes and performance statistics columns that you can include in the TacticChannelReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/gg262851(v=msads.90).aspx TacticChannelReportColumn Value Set
     * 
     * @used-by TacticChannelReportRequest
     */
    final class TacticChannelReportColumn
    {
        /** The Id element of an Account. */
        const AccountId = 'AccountId';

        /** The Name element of an Account. */
        const AccountName = 'AccountName';

        /** The Number element of an Account. */
        const AccountNumber = 'AccountNumber';

        /** The Id element of an AdGroup. */
        const AdGroupId = 'AdGroupId';

        /** The Name element of an AdGroup. */
        const AdGroupName = 'AdGroupName';

        /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
        const Assists = 'Assists';

        /** The Id element of a Campaign. */
        const CampaignId = 'CampaignId';

        /** The Name element of a Campaign. */
        const CampaignName = 'CampaignName';

        /** The name of the channel provider that displayed the ads. */
        const Channel = 'Channel';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The funnel conversion rate is the percent of conversions completed by users who at minimum visited the webpage corresponding to step 1 of your goal. */
        const FunnelConversionRate = 'FunnelConversionRate';

        /** The name of the campaign analytics goal for tracking potential land, browse, prospect, and conversion steps. */
        const Goal = 'Goal';

        /** The Text element of a Keyword. */
        const Keyword = 'Keyword';

        /** The Id element of a Keyword. */
        const KeywordId = 'KeywordId';

        /** The return on ad spend (ROAS). */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The number of times that a user entered step 1 of the funnel. */
        const Step1Count = 'Step1Count';

        /** The number of times that a user entered step 2 of the funnel. */
        const Step2Count = 'Step2Count';

        /** The number of times that a user entered step 3 of the funnel. */
        const Step3Count = 'Step3Count';

        /** The number of times that a user entered step 1 of the funnel. */
        const Step4Count = 'Step4Count';

        /** The number of times that a user entered step 1 of the funnel. */
        const Step5Count = 'Step5Count';

        /** The name of the advertising tactic. */
        const Tactic = 'Tactic';

        /** The name of the ad group that you defined on a paid search provider other than Bing Ads. */
        const ThirdPartyAdGroup = 'ThirdPartyAdGroup';

        /** The name of the campaign that you defined on a paid search provider other than Bing Ads. */
        const ThirdPartyCampaign = 'ThirdPartyCampaign';

        /** The keyword to track that you defined on a paid search provider other than Bing Ads. */
        const ThirdPartyTerm = 'ThirdPartyTerm';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';
    }

    /**
     * Defines the attributes columns that you can include in the NegativeKeywordConflictReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/hh560535(v=msads.90).aspx NegativeKeywordConflictReportColumn Value Set
     * 
     * @used-by NegativeKeywordConflictReportRequest
     */
    final class NegativeKeywordConflictReportColumn
    {
        /** The Id element of an Account. */
        const AccountId = 'AccountId';

        /** The Name element of an Account. */
        const AccountName = 'AccountName';

        /** The Number element of an Account. */
        const AccountNumber = 'AccountNumber';

        /** The Id element of an AdGroup. */
        const AdGroupId = 'AdGroupId';

        /** The Name element of an AdGroup. */
        const AdGroupName = 'AdGroupName';

        /** The Id element of a Campaign. */
        const CampaignId = 'CampaignId';

        /** The Name element of a Campaign. */
        const CampaignName = 'CampaignName';

        /** The entity level where the keyword and negative keyword conflict occurs. */
        const ConflictLevel = 'ConflictLevel';

        /** The Text element of a Keyword. */
        const Keyword = 'Keyword';

        /** The Id element of a Keyword. */
        const KeywordId = 'KeywordId';

        /** The negative keyword that conflicts with the keyword at the ad group or campaign level. */
        const NegativeKeyword = 'NegativeKeyword';
    }

    /**
     * Defines the attribute columns that you can include in the SearchCampaignChangeHistoryReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/hh912353(v=msads.90).aspx SearchCampaignChangeHistoryReportColumn Value Set
     * 
     * @used-by SearchCampaignChangeHistoryReportRequest
     */
    final class SearchCampaignChangeHistoryReportColumn
    {
        /** The Id element of an Account. */
        const AccountId = 'AccountId';

        /** The Text element of a MobileAd or TextAd. */
        const AdDescription = 'AdDescription';

        /** The Id element of an AdGroup. */
        const AdGroupId = 'AdGroupId';

        /** The Name element of an AdGroup. */
        const AdGroupName = 'AdGroupName';

        /** The Title element of a MobileAd or TextAd. */
        const AdTitle = 'AdTitle';

        /** Identifies the attribute or property of the entity from the ItemChanged column that changed. */
        const AttributeChanged = 'AttributeChanged';

        /** The Id element of a Campaign. */
        const CampaignId = 'CampaignId';

        /** The Name element of a Campaign. */
        const CampaignName = 'CampaignName';

        /** The username of the user that made the change to settings within the account. */
        const ChangedBy = 'ChangedBy';

        /** The date and time of the change. */
        const DateTime = 'DateTime';

        /** The DisplayUrl element of a MobileAd or TextAd. */
        const DisplayUrl = 'DisplayUrl';

        /** The value that indicates whether the element was added, updated, or deleted. */
        const HowChanged = 'HowChanged';

        /** The value that identifies the entity that changed. */
        const ItemChanged = 'ItemChanged';

        /** The Text element of a Keyword. */
        const Keyword = 'Keyword';

        /** The value after the change. */
        const NewValue = 'NewValue';

        /** The value before the change. */
        const OldValue = 'OldValue';
    }

    /**
     * Defines the types of changes to entities by which you can filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/hh912354(v=msads.90).aspx ChangeTypeReportFilter Value Set
     * 
     * @used-by SearchCampaignChangeHistoryReportFilter
     */
    final class ChangeTypeReportFilter
    {
        /** The report will include data for entities that have been added. */
        const Added = 'Added';

        /** The report will include data for elements of entities whose values have been updated. */
        const Changed = 'Changed';

        /** The report will include data for entities that have been deleted. */
        const Deleted = 'Deleted';
    }

    /**
     * Defines the types of entities by which you can filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/hh912355(v=msads.90).aspx ChangeEntityReportFilter Value Set
     * 
     * @used-by SearchCampaignChangeHistoryReportFilter
     */
    final class ChangeEntityReportFilter
    {
        /** The report will include data for accounts that have been added or deleted, or that have had account elements updated. */
        const Account = 'Account';

        /** The report will include data for ads that have been added or deleted, or that have had ad elements updated. */
        const Ad = 'Ad';

        /** The report will include data for ad groups that have been added or deleted, or that have had ad group elements updated. */
        const AdGroup = 'AdGroup';

        /** The report will include data for campaigns that have been added or deleted, or that have had campaign elements updated. */
        const Campaign = 'Campaign';

        /** The report will include data for keywords that have been added or deleted, or that have had keyword elements updated. */
        const Keyword = 'Keyword';
    }

    /**
     * Defines the attributes and performance statistics columns that you can include in the AdExtensionByAdReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/jj713608(v=msads.90).aspx AdExtensionByAdReportColumn Value Set
     * 
     * @used-by AdExtensionByAdReportRequest
     */
    final class AdExtensionByAdReportColumn
    {
        /** The Id element of an Account. */
        const AccountId = 'AccountId';

        /** The Name element of an Account. */
        const AccountName = 'AccountName';

        /** The Number element of an Account. */
        const AccountNumber = 'AccountNumber';

        /** The Id element of either the CallAdExtension, LocationAdExtension, ProductAdExtension, or SiteLinksAdExtension, which is inherited from the AdExtension base object. */
        const AdExtensionId = 'AdExtensionId';

        /** The type name that corresponds to the AdExtensionTypeId column. */
        const AdExtensionType = 'AdExtensionType';

        /** The Version element of either the CallAdExtension, LocationAdExtension, ProductAdExtension, or SiteLinksAdExtension, which is inherited from the AdExtension base object. */
        const AdExtensionVersion = 'AdExtensionVersion';

        /** The Id element of an AdGroup. */
        const AdGroupId = 'AdGroupId';

        /** The Name element of an AdGroup. */
        const AdGroupName = 'AdGroupName';

        /** The Id element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
        const AdId = 'AdId';

        /** The Title element of a MobileAd or TextAd. */
        const AdTitle = 'AdTitle';

        /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
        const Assists = 'Assists';

        /** The average cost per click (CPC). */
        const AverageCpc = 'AverageCpc';

        /** The MatchType element of a Keyword. */
        const BidMatchType = 'BidMatchType';

        /** The Id element of a Campaign. */
        const CampaignId = 'CampaignId';

        /** The Name element of a Campaign. */
        const CampaignName = 'CampaignName';

        /** The number of times that the ads in the account were clicked. */
        const Clicks = 'Clicks';

        /** The ad extension item that the user clicked. */
        const ClickType = 'ClickType';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The cost per assist. */
        const CostPerAssist = 'CostPerAssist';

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
        const Ctr = 'Ctr';

        /** The match type used to deliver an ad. */
        const DeliveredMatchType = 'DeliveredMatchType';

        /** The operating system of the device specified in the DeviceType column and corresponding to the OSNames element of a DeviceOSTargetBid. */
        const DeviceOS = 'DeviceOS';

        /** The DeviceName element of a DeviceOSTargetBid. */
        const DeviceType = 'DeviceType';

        /** Cost information that is optionally provided by advertisers, including non-advertising costs, taxes, and shipping. */
        const ExtendedCost = 'ExtendedCost';

        /** The number of times an ad has been displayed on search results pages. */
        const Impressions = 'Impressions';

        /** The Network element of an AdGroup. */
        const Network = 'Network';

        /** The return on ad spend (ROAS). */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The revenue per assist. */
        const RevenuePerAssist = 'RevenuePerAssist';

        /** The revenue per conversion. */
        const RevenuePerConversion = 'RevenuePerConversion';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
        const TopVsOther = 'TopVsOther';

        /** The number of billable and non-billable times that the ad extension was clicked. */
        const TotalClicks = 'TotalClicks';
    }

    /**
     * Defines the attributes and performance statistics columns that you can include in the AdExtensionByKeywordReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/jj713610(v=msads.90).aspx AdExtensionByKeywordReportColumn Value Set
     * 
     * @used-by AdExtensionByKeywordReportRequest
     */
    final class AdExtensionByKeywordReportColumn
    {
        /** The Id element of an Account. */
        const AccountId = 'AccountId';

        /** The Name element of an Account. */
        const AccountName = 'AccountName';

        /** The Number element of an Account. */
        const AccountNumber = 'AccountNumber';

        /** The Id element of either the CallAdExtension, LocationAdExtension, ProductAdExtension, or SiteLinksAdExtension, which is inherited from the AdExtension base object. */
        const AdExtensionId = 'AdExtensionId';

        /** The type name that corresponds to the AdExtensionTypeId column. */
        const AdExtensionType = 'AdExtensionType';

        /** The Version element of either the CallAdExtension, LocationAdExtension, ProductAdExtension, or SiteLinksAdExtension, which is inherited from the AdExtension base object. */
        const AdExtensionVersion = 'AdExtensionVersion';

        /** The Id element of an AdGroup. */
        const AdGroupId = 'AdGroupId';

        /** The Name element of an AdGroup. */
        const AdGroupName = 'AdGroupName';

        /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
        const Assists = 'Assists';

        /** The average cost per click (CPC). */
        const AverageCpc = 'AverageCpc';

        /** The MatchType element of a Keyword. */
        const BidMatchType = 'BidMatchType';

        /** The Id element of a Campaign. */
        const CampaignId = 'CampaignId';

        /** The Name element of a Campaign. */
        const CampaignName = 'CampaignName';

        /** The number of times that the ads in the account were clicked. */
        const Clicks = 'Clicks';

        /** The ad extension item that the user clicked. */
        const ClickType = 'ClickType';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The cost per assist. */
        const CostPerAssist = 'CostPerAssist';

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
        const Ctr = 'Ctr';

        /** The match type used to deliver an ad. */
        const DeliveredMatchType = 'DeliveredMatchType';

        /** The operating system of the device specified in the DeviceType column and corresponding to the OSNames element of a DeviceOSTargetBid. */
        const DeviceOS = 'DeviceOS';

        /** The DeviceName element of a DeviceOSTargetBid. */
        const DeviceType = 'DeviceType';

        /** Cost information that is optionally provided by advertisers, including non-advertising costs, taxes, and shipping. */
        const ExtendedCost = 'ExtendedCost';

        /** The number of times an ad has been displayed on search results pages. */
        const Impressions = 'Impressions';

        /** The Text element of a Keyword. */
        const Keyword = 'Keyword';

        /** The Id element of a Keyword. */
        const KeywordId = 'KeywordId';

        /** The Network element of an AdGroup. */
        const Network = 'Network';

        /** The return on ad spend (ROAS). */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The revenue per assist. */
        const RevenuePerAssist = 'RevenuePerAssist';

        /** The revenue per conversion. */
        const RevenuePerConversion = 'RevenuePerConversion';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
        const TopVsOther = 'TopVsOther';

        /** The number of billable and non-billable times that the ad extension was clicked. */
        const TotalClicks = 'TotalClicks';
    }

    /**
     * Defines the attributes and performance statistics columns that you can include in the AdExtensionDimensionReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/jj713609(v=msads.90).aspx AdExtensionDimensionReportColumn Value Set
     * 
     * @used-by AdExtensionDimensionReportRequest
     */
    final class AdExtensionDimensionReportColumn
    {
        /** The Id element of an Account. */
        const AccountId = 'AccountId';

        /** The Id element of either the CallAdExtension, LocationAdExtension, ProductAdExtension, or SiteLinksAdExtension, which is inherited from the AdExtension base object. */
        const AdExtensionId = 'AdExtensionId';

        /** Positive integer system identifiers ranging from 1 through 20, which map to properties of the CallAdExtension, LocationAdExtension, and SiteLink objects. */
        const AdExtensionPropertyId = 'AdExtensionPropertyId';

        /** The human readable ad extension property value. */
        const AdExtensionPropertyValue = 'AdExtensionPropertyValue';

        /** The type name that corresponds to the AdExtensionTypeId column. */
        const AdExtensionType = 'AdExtensionType';

        /** The Version element of either the CallAdExtension, LocationAdExtension, ProductAdExtension, or SiteLinksAdExtension, which is inherited from the AdExtension base object. */
        const AdExtensionVersion = 'AdExtensionVersion';

        /** The current delivery status. */
        const Status = 'Status';
    }

    /**
     * Defines the attributes and performance statistics columns that you can include in the AdExtensionDetailReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/dn610365(v=msads.90).aspx AdExtensionDetailReportColumn Value Set
     * 
     * @used-by AdExtensionDetailReportRequest
     */
    final class AdExtensionDetailReportColumn
    {
        /** The Id element of an Account. */
        const AccountId = 'AccountId';

        /** The Name element of an Account. */
        const AccountName = 'AccountName';

        /** The Id element of either the CallAdExtension, LocationAdExtension, ProductAdExtension, or SiteLinksAdExtension, which is inherited from the AdExtension base object. */
        const AdExtensionId = 'AdExtensionId';

        /** The human readable ad extension property value. */
        const AdExtensionPropertyValue = 'AdExtensionPropertyValue';

        /** The type name that corresponds to the AdExtensionTypeId column. */
        const AdExtensionType = 'AdExtensionType';

        /** The system identifier that corresponds to the AdExtensionType column. */
        const AdExtensionTypeId = 'AdExtensionTypeId';

        /** The Version element of either the CallAdExtension, LocationAdExtension, ProductAdExtension, or SiteLinksAdExtension, which is inherited from the AdExtension base object. */
        const AdExtensionVersion = 'AdExtensionVersion';

        /** The Id element of an AdGroup. */
        const AdGroupId = 'AdGroupId';

        /** The Name element of an AdGroup. */
        const AdGroupName = 'AdGroupName';

        /** The Id element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
        const AdId = 'AdId';

        /** The Title element of a MobileAd or TextAd. */
        const AdTitle = 'AdTitle';

        /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
        const Assists = 'Assists';

        /** The average cost per click (CPC). */
        const AverageCpc = 'AverageCpc';

        /** The MatchType element of a Keyword. */
        const BidMatchType = 'BidMatchType';

        /** The Id element of a Campaign. */
        const CampaignId = 'CampaignId';

        /** The Name element of a Campaign. */
        const CampaignName = 'CampaignName';

        /** The number of times that the ads in the account were clicked. */
        const Clicks = 'Clicks';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The cost per assist. */
        const CostPerAssist = 'CostPerAssist';

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
        const Ctr = 'Ctr';

        /** The match type used to deliver an ad. */
        const DeliveredMatchType = 'DeliveredMatchType';

        /** The operating system of the device specified in the DeviceType column and corresponding to the OSNames element of a DeviceOSTargetBid. */
        const DeviceOS = 'DeviceOS';

        /** The DeviceName element of a DeviceOSTargetBid. */
        const DeviceType = 'DeviceType';

        /** Cost information that is optionally provided by advertisers, including non-advertising costs, taxes, and shipping. */
        const ExtendedCost = 'ExtendedCost';

        /** The number of times an ad has been displayed on search results pages. */
        const Impressions = 'Impressions';

        /** The Network element of an AdGroup. */
        const Network = 'Network';

        /** The return on ad spend (ROAS). */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The revenue per assist. */
        const RevenuePerAssist = 'RevenuePerAssist';

        /** The revenue per conversion. */
        const RevenuePerConversion = 'RevenuePerConversion';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
        const TopVsOther = 'TopVsOther';
    }

    /**
     * Defines the attributes and performance statistics columns that you can include in the ShareOfVoicePerformanceReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/jj592910(v=msads.90).aspx ShareOfVoiceReportColumn Value Set
     * 
     * @used-by ShareOfVoiceReportRequest
     */
    final class ShareOfVoiceReportColumn
    {
        /** The Id element of an Account. */
        const AccountId = 'AccountId';

        /** The Name element of an Account. */
        const AccountName = 'AccountName';

        /** The Number element of an Account. */
        const AccountNumber = 'AccountNumber';

        /** The AdDistribution element of an AdGroup. */
        const AdDistribution = 'AdDistribution';

        /** The Id element of an AdGroup. */
        const AdGroupId = 'AdGroupId';

        /** The Name element of an AdGroup. */
        const AdGroupName = 'AdGroupName';

        /** The average cost per click (CPC). */
        const AverageCpc = 'AverageCpc';

        /** The average position of the ad on a webpage. */
        const AveragePosition = 'AveragePosition';

        /** The MatchType element of a Keyword. */
        const BidMatchType = 'BidMatchType';

        /** The Id element of a Campaign. */
        const CampaignId = 'CampaignId';

        /** The Name element of a Campaign. */
        const CampaignName = 'CampaignName';

        /** The number of times that the ads in the account were clicked. */
        const Clicks = 'Clicks';
        const ClickSharePercent = 'ClickSharePercent';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
        const Ctr = 'Ctr';

        /** The maximum cost per click. */
        const CurrentMaxCpc = 'CurrentMaxCpc';

        /** The match type used to deliver an ad. */
        const DeliveredMatchType = 'DeliveredMatchType';

        /** The percentage of time your ads would have been displayed to users, but were not because your bid was too low or your bid and quality score was below minimum thresholds, which prevented you from entering the auction. */
        const ImpressionLostToBidPercent = 'ImpressionLostToBidPercent';

        /** The percentage of time your ads would have been displayed to users, but were not because of a budget shortfall. */
        const ImpressionLostToBudgetPercent = 'ImpressionLostToBudgetPercent';

        /** The percentage of time your ads would have been displayed to users, but were not because your ad copy was not relevant to the user's search query. */
        const ImpressionLostToKeywordRelevancePercent = 'ImpressionLostToKeywordRelevancePercent';

        /** The percentage of time your ads would have been displayed to users, but were not due to one or both of the following reasons. */
        const ImpressionLostToLandingPageRelevancePercent = 'ImpressionLostToLandingPageRelevancePercent';

        /** The percentage of time your ads would have been displayed to users, but were not because your ads ranked too low in the auction. */
        const ImpressionLostToRankPercent = 'ImpressionLostToRankPercent';
        const ImpressionLostToRelevancePercent = 'ImpressionLostToRelevancePercent';

        /** The number of times an ad has been displayed on search results pages. */
        const Impressions = 'Impressions';

        /** The percentage of time your ads were displayed to users who searched by keywords that matched your keywords and targeting selections. */
        const ImpressionSharePercent = 'ImpressionSharePercent';

        /** The Text element of a Keyword. */
        const Keyword = 'Keyword';

        /** The Id element of a Keyword. */
        const KeywordId = 'KeywordId';

        /** The numeric score that indicates the relevance of your keyword to the search term. */
        const KeywordRelevance = 'KeywordRelevance';

        /** The numeric score that indicates the relevance of your ad and landing page to the search query. */
        const LandingPageRelevance = 'LandingPageRelevance';

        /** The numeric score that is an aggregate assessment of the quality of all landing pages on your site. */
        const LandingPageUserExperience = 'LandingPageUserExperience';

        /** The Language element of an AdGroup. */
        const Language = 'Language';

        /** The numeric score shows you how competitive your ads are in the marketplace by measuring how relevant your keywords and landing pages are to customers' search terms. */
        const QualityScore = 'QualityScore';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';
    }

    /**
     * Defines the attributes and performance statistics columns that you can include in the ProductTargetPerformanceReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/dn195844(v=msads.90).aspx ProductTargetPerformanceReportColumn Value Set
     * 
     * @used-by ProductTargetPerformanceReportRequest
     */
    final class ProductTargetPerformanceReportColumn
    {
        /** The Id element of an Account. */
        const AccountId = 'AccountId';

        /** The Name element of an Account. */
        const AccountName = 'AccountName';

        /** The Number element of an Account. */
        const AccountNumber = 'AccountNumber';

        /** The AccountLifeCycleStatus element of an Account. */
        const AccountStatus = 'AccountStatus';

        /** The Id element of an AdGroupCriterion, which is a product target. */
        const AdGroupCriterionId = 'AdGroupCriterionId';

        /** The Id element of an AdGroup. */
        const AdGroupId = 'AdGroupId';

        /** The Name element of an AdGroup. */
        const AdGroupName = 'AdGroupName';

        /** The Status element of an AdGroup. */
        const AdGroupStatus = 'AdGroupStatus';

        /** The Id element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
        const AdId = 'AdId';

        /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
        const Assists = 'Assists';

        /** The average cost per click (CPC). */
        const AverageCpc = 'AverageCpc';

        /** The MatchType element of a Keyword. */
        const BidMatchType = 'BidMatchType';

        /** The Id element of a Campaign. */
        const CampaignId = 'CampaignId';

        /** The Name element of a Campaign. */
        const CampaignName = 'CampaignName';

        /** The Status element of a Campaign. */
        const CampaignStatus = 'CampaignStatus';

        /** The number of times that the ads in the account were clicked. */
        const Clicks = 'Clicks';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The cost per assist. */
        const CostPerAssist = 'CostPerAssist';

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
        const Ctr = 'Ctr';

        /** The CurrencyType element of an Account. */
        const CurrencyCode = 'CurrencyCode';

        /** The maximum cost per click. */
        const CurrentMaxCpc = 'CurrentMaxCpc';

        /** The match type used to deliver an ad. */
        const DeliveredMatchType = 'DeliveredMatchType';

        /** The DestinationUrl element of the TextAd, MobileAd, Keyword, or BiddableAdGroupCriterion. */
        const DestinationUrl = 'DestinationUrl';

        /** The operating system of the device specified in the DeviceType column and corresponding to the OSNames element of a DeviceOSTargetBid. */
        const DeviceOS = 'DeviceOS';

        /** The DeviceName element of a DeviceOSTargetBid. */
        const DeviceType = 'DeviceType';

        /** Cost information that is optionally provided by advertisers, including non-advertising costs, taxes, and shipping. */
        const ExtendedCost = 'ExtendedCost';

        /** The number of times an ad has been displayed on search results pages. */
        const Impressions = 'Impressions';

        /** The Status element of a Keyword. */
        const KeywordStatus = 'KeywordStatus';

        /** The Language element of an AdGroup. */
        const Language = 'Language';

        /** The Network element of an AdGroup. */
        const Network = 'Network';

        /** The name of the product target. */
        const ProductTarget = 'ProductTarget';

        /** The return on ad spend (ROAS). */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The revenue per assist. */
        const RevenuePerAssist = 'RevenuePerAssist';

        /** The revenue per conversion. */
        const RevenuePerConversion = 'RevenuePerConversion';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
        const TopVsOther = 'TopVsOther';
    }

    /**
     * Defines the status of a report.
     * @link http://msdn.microsoft.com/en-us/library/bb671578(v=msads.90).aspx ReportRequestStatusType Value Set
     * 
     * @used-by ReportRequestStatus
     */
    final class ReportRequestStatusType
    {
        /** An error occurred while generating the report. */
        const Error = 'Error';

        /** The report is not yet complete. */
        const Pending = 'Pending';

        /** The report was successfully completed. */
        const Success = 'Success';
    }

    /**
     * Defines the criteria to use to filter the account performance report data.
     * @link http://msdn.microsoft.com/en-us/library/bb671671(v=msads.90).aspx AccountPerformanceReportFilter Data Object
     * 
     * @uses AdDistributionReportFilter
     * @uses DeviceOSReportFilter
     * @uses DeviceTypeReportFilter
     * @used-by AccountPerformanceReportRequest
     */
    final class AccountPerformanceReportFilter
    {
        /**
         * The report will include data for only the specified distribution medium.
         * @var AdDistributionReportFilter
         */
        public $AdDistribution;

        /**
         * The report will include data where the ad is displayed on the specified device operating systems.
         * @var DeviceOSReportFilter
         */
        public $DeviceOS;

        /**
         * The report will include data where the ad is displayed on the specified device types.
         * @var DeviceTypeReportFilter
         */
        public $DeviceType;
    }

    /**
     * Defines the base object for all report requests.
     * @link http://msdn.microsoft.com/en-us/library/bb671813(v=msads.90).aspx ReportRequest Data Object
     * 
     * @uses ReportFormat
     * @uses ReportLanguage
     * @used-by SubmitGenerateReportRequest
     */
    class ReportRequest
    {
        /**
         * The format of the report data.
         * @var ReportFormat
         */
        public $Format;

        /**
         * The language to use to generate the report headers and columns.
         * @var ReportLanguage
         */
        public $Language;

        /**
         * The name of the report.
         * @var string
         */
        public $ReportName;

        /**
         * Determines whether you want the service to generate the report only if all the data has been processed and is available.
         * @var boolean
         */
        public $ReturnOnlyCompleteData;
    }

    /**
     * Defines an account performance report request.
     * @link http://msdn.microsoft.com/en-us/library/bb671927(v=msads.90).aspx AccountPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses AccountPerformanceReportColumn
     * @uses AccountPerformanceReportFilter
     * @uses AccountReportScope
     * @uses ReportTime
     */
    final class AccountPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of columns to include in the report.
         * @var AccountPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var AccountPerformanceReportFilter
         */
        public $Filter;

        /**
         * The scope of the report.
         * @var AccountReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

    /**
     * Defines the set of accounts to include in the report.
     * @link http://msdn.microsoft.com/en-us/library/bb671563(v=msads.90).aspx AccountReportScope Data Object
     * 
     * @used-by AccountPerformanceReportRequest
     * @used-by AdExtensionDimensionReportRequest
     * @used-by TrafficSourcesReportRequest
     */
    final class AccountReportScope
    {
        /**
         * An array of a maximum of 1,000 account identifiers that identifies the account data to include in the report.
         * @var integer[]
         */
        public $AccountIds;
    }

    /**
     * Defines the set of accounts, campaigns, and ad groups to include in the report.
     * @link http://msdn.microsoft.com/en-us/library/bb671547(v=msads.90).aspx AccountThroughAdGroupReportScope Data Object
     * 
     * @uses AdGroupReportScope
     * @uses CampaignReportScope
     * @used-by AdDynamicTextPerformanceReportRequest
     * @used-by AdExtensionByAdReportRequest
     * @used-by AdExtensionByKeywordReportRequest
     * @used-by AdExtensionDetailReportRequest
     * @used-by AdGroupPerformanceReportRequest
     * @used-by AdPerformanceReportRequest
     * @used-by AgeGenderDemographicReportRequest
     * @used-by CallDetailReportRequest
     * @used-by ConversionPerformanceReportRequest
     * @used-by DestinationUrlPerformanceReportRequest
     * @used-by GeographicalLocationReportRequest
     * @used-by GoalsAndFunnelsReportRequest
     * @used-by KeywordPerformanceReportRequest
     * @used-by NegativeKeywordConflictReportRequest
     * @used-by ProductTargetPerformanceReportRequest
     * @used-by PublisherUsagePerformanceReportRequest
     * @used-by RichAdComponentPerformanceReportRequest
     * @used-by SearchCampaignChangeHistoryReportRequest
     * @used-by SearchQueryPerformanceReportRequest
     * @used-by ShareOfVoiceReportRequest
     * @used-by SitePerformanceReportRequest
     * @used-by TacticChannelReportRequest
     */
    final class AccountThroughAdGroupReportScope
    {
        /**
         * An array of account identifiers that identifies the account data to include in the report.
         * @var integer[]
         */
        public $AccountIds;

        /**
         * An array of AdGroupReportScope objects that identifies the ad group data to include in the report.
         * @var AdGroupReportScope[]
         */
        public $AdGroups;

        /**
         * An array of CampaignReportScope objects that identifies the campaign data to include in the report.
         * @var CampaignReportScope[]
         */
        public $Campaigns;
    }

    /**
     * Defines the set of accounts and campaigns to include in the report.
     * @link http://msdn.microsoft.com/en-us/library/bb671549(v=msads.90).aspx AccountThroughCampaignReportScope Data Object
     * 
     * @uses CampaignReportScope
     * @used-by BudgetSummaryReportRequest
     * @used-by CampaignPerformanceReportRequest
     */
    final class AccountThroughCampaignReportScope
    {
        /**
         * An array of account identifiers that identifies the account data to include in the report.
         * @var integer[]
         */
        public $AccountIds;

        /**
         * An array of CampaignReportScope objects that identifies the campaign data to include in the report.
         * @var CampaignReportScope[]
         */
        public $Campaigns;
    }

    /**
     * Defines an error object that contains the details that explain why the service operation failed.
     * @link http://msdn.microsoft.com/en-us/library/dn169137(v=msads.90).aspx AdApiError Data Object
     * 
     * @used-by AdApiFaultDetail
     */
    final class AdApiError
    {
        /**
         * A numeric error code that identifies the error.
         * @var integer
         */
        public $Code;

        /**
         * A message that contains additional details about the error.
         * @var string
         */
        public $Detail;

        /**
         * A symbolic string constant that identifies the error.
         * @var string
         */
        public $ErrorCode;

        /**
         * A message that describes the error.
         * @var string
         */
        public $Message;
    }

    /**
     * Defines the base object from which all fault detail objects derive.
     * @link http://msdn.microsoft.com/en-us/library/dn169139(v=msads.90).aspx ApplicationFault Data Object
     */
    class ApplicationFault
    {
        /**
         * The identifier of the log entry that contains the details of the API call.
         * @var string
         */
        public $TrackingId;
    }

    /**
     * Defines a fault object that operations return when generic errors occur, such as an authentication error.
     * @link http://msdn.microsoft.com/en-us/library/dn169140(v=msads.90).aspx AdApiFaultDetail Data Object
     * 
     * @uses AdApiError
     */
    final class AdApiFaultDetail extends ApplicationFault
    {
        /**
         * An array of AdApiError objects that contains the details that explain why the service operation failed.
         * @var AdApiError[]
         */
        public $Errors;
    }

    /**
     * Defines the criteria to use to filter the ad dynamic text performance report data.
     * @link http://msdn.microsoft.com/en-us/library/bb672086(v=msads.90).aspx AdDynamicTextPerformanceReportFilter Data Object
     * 
     * @uses AdDistributionReportFilter
     * @uses AdTypeReportFilter
     * @uses DeviceTypeReportFilter
     * @used-by AdDynamicTextPerformanceReportRequest
     */
    final class AdDynamicTextPerformanceReportFilter
    {
        /**
         * The report will include data for only the specified distribution medium.
         * @var AdDistributionReportFilter
         */
        public $AdDistribution;

        /**
         * The report will include data for only the specified ad types.
         * @var AdTypeReportFilter
         */
        public $AdType;

        /**
         * The report will include data for only the specified types of devices on which the ad is displayed.
         * @var DeviceTypeReportFilter
         */
        public $DeviceType;

        /**
         * The report will include data for only websites that used the specified languages.
         * @var string[]
         */
        public $LanguageCode;
    }

    /**
     * Defines an ad dynamic text performance report request.
     * @link http://msdn.microsoft.com/en-us/library/bb671950(v=msads.90).aspx AdDynamicTextPerformanceReportRequest Data Object
     * 
     * @uses NonHourlyReportAggregation
     * @uses AdDynamicTextPerformanceReportColumn
     * @uses AdDynamicTextPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class AdDynamicTextPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var NonHourlyReportAggregation
         */
        public $Aggregation;

        /**
         * The list of columns to include in the report.
         * @var AdDynamicTextPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var AdDynamicTextPerformanceReportFilter
         */
        public $Filter;

        /**
         * The scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

    /**
     * Defines the criteria to use to filter the ad extension by ad report data.
     * @link http://msdn.microsoft.com/en-us/library/dn393942(v=msads.90).aspx AdExtensionByAdReportFilter Data Object
     * 
     * @uses DeviceOSReportFilter
     * @uses DeviceTypeReportFilter
     * @used-by AdExtensionByAdReportRequest
     */
    final class AdExtensionByAdReportFilter
    {
        /**
         * The report will include data where the ad is displayed on the specified device operating systems.
         * @var DeviceOSReportFilter
         */
        public $DeviceOS;

        /**
         * The report will include data where the ad is displayed on the specified device types.
         * @var DeviceTypeReportFilter
         */
        public $DeviceType;
    }

    /**
     * Defines an ad extension by ad report request.
     * @link http://msdn.microsoft.com/en-us/library/jj713606(v=msads.90).aspx AdExtensionByAdReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses AdExtensionByAdReportColumn
     * @uses AdExtensionByAdReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class AdExtensionByAdReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of columns to include in the report.
         * @var AdExtensionByAdReportColumn[]
         */
        public $Columns;

        /**
         * The criteria to use to filter the report data.
         * @var AdExtensionByAdReportFilter
         */
        public $Filter;

        /**
         * The scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

    /**
     * Defines the criteria to use to filter the ad extension by keyword report data.
     * @link http://msdn.microsoft.com/en-us/library/dn393943(v=msads.90).aspx AdExtensionByKeywordReportFilter Data Object
     * 
     * @uses DeviceOSReportFilter
     * @uses DeviceTypeReportFilter
     * @used-by AdExtensionByKeywordReportRequest
     */
    final class AdExtensionByKeywordReportFilter
    {
        /**
         * The report will include data where the ad is displayed on the specified device operating systems.
         * @var DeviceOSReportFilter
         */
        public $DeviceOS;

        /**
         * The report will include data where the ad is displayed on the specified device types.
         * @var DeviceTypeReportFilter
         */
        public $DeviceType;
    }

    /**
     * Defines an ad extension by keyword report request.
     * @link http://msdn.microsoft.com/en-us/library/jj713605(v=msads.90).aspx AdExtensionByKeywordReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses AdExtensionByKeywordReportColumn
     * @uses AdExtensionByKeywordReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class AdExtensionByKeywordReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of columns to include in the report.
         * @var AdExtensionByKeywordReportColumn[]
         */
        public $Columns;

        /**
         * The criteria to use to filter the report data.
         * @var AdExtensionByKeywordReportFilter
         */
        public $Filter;

        /**
         * The scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

    /**
     * Defines the criteria to use to filter the ad extension detail report.
     * @link http://msdn.microsoft.com/en-us/library/dn610806(v=msads.90).aspx AdExtensionDetailReportFilter Data Object
     * 
     * @uses DeviceOSReportFilter
     * @uses DeviceTypeReportFilter
     * @used-by AdExtensionDetailReportRequest
     */
    final class AdExtensionDetailReportFilter
    {
        /**
         * The report will include data where the ad is displayed on the specified device operating systems.
         * @var DeviceOSReportFilter
         */
        public $DeviceOS;

        /**
         * The report will include data where the ad is displayed on the specified device types.
         * @var DeviceTypeReportFilter
         */
        public $DeviceType;
    }

    /**
     * Defines an ad extension detail report request.
     * @link http://msdn.microsoft.com/en-us/library/dn610364(v=msads.90).aspx AdExtensionDetailReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses AdExtensionDetailReportColumn
     * @uses AdExtensionDetailReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class AdExtensionDetailReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of columns to include in the report.
         * @var AdExtensionDetailReportColumn[]
         */
        public $Columns;

        /**
         * The criteria to use to filter the report data.
         * @var AdExtensionDetailReportFilter
         */
        public $Filter;

        /**
         * The scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

    /**
     * Defines the criteria to use to filter the ad extension dimension report data.
     * @link http://msdn.microsoft.com/en-us/library/dn393947(v=msads.90).aspx AdExtensionDimensionReportFilter Data Object
     * 
     * @uses DeviceOSReportFilter
     * @uses DeviceTypeReportFilter
     * @used-by AdExtensionDimensionReportRequest
     */
    final class AdExtensionDimensionReportFilter
    {
        /**
         * The report will include data where the ad is displayed on the specified device operating systems.
         * @var DeviceOSReportFilter
         */
        public $DeviceOS;

        /**
         * The report will include data where the ad is displayed on the specified device types.
         * @var DeviceTypeReportFilter
         */
        public $DeviceType;
    }

    /**
     * Defines an ad extension dimension report request that lists all versions of an ad extension by account.
     * @link http://msdn.microsoft.com/en-us/library/jj713607(v=msads.90).aspx AdExtensionDimensionReportRequest Data Object
     * 
     * @uses AdExtensionDimensionReportColumn
     * @uses AdExtensionDimensionReportFilter
     * @uses AccountReportScope
     */
    final class AdExtensionDimensionReportRequest extends ReportRequest
    {
        /**
         * The list of columns to include in the report.
         * @var AdExtensionDimensionReportColumn[]
         */
        public $Columns;

        /**
         * The criteria to use to filter the report data.
         * @var AdExtensionDimensionReportFilter
         */
        public $Filter;

        /**
         * The scope of the report.
         * @var AccountReportScope
         */
        public $Scope;
    }

    /**
     * Defines the criteria to use to filter the ad group performance report data.
     * @link http://msdn.microsoft.com/en-us/library/bb671729(v=msads.90).aspx AdGroupPerformanceReportFilter Data Object
     * 
     * @uses AdDistributionReportFilter
     * @uses DeviceOSReportFilter
     * @uses DeviceTypeReportFilter
     * @uses AdGroupStatusReportFilter
     * @used-by AdGroupPerformanceReportRequest
     */
    final class AdGroupPerformanceReportFilter
    {
        /**
         * The report will include data for only the specified distribution medium.
         * @var AdDistributionReportFilter
         */
        public $AdDistribution;

        /**
         * The report will include data where the ad is displayed on the specified device operating systems.
         * @var DeviceOSReportFilter
         */
        public $DeviceOS;

        /**
         * The report will include data where the ad is displayed on the specified device types.
         * @var DeviceTypeReportFilter
         */
        public $DeviceType;

        /**
         * The report will include data for only websites that used the specified languages.
         * @var string[]
         */
        public $LanguageCode;

        /**
         * The report will include data for only the specified ad group status values.
         * @var AdGroupStatusReportFilter
         */
        public $Status;
    }

    /**
     * Defines an ad group performance report request.
     * @link http://msdn.microsoft.com/en-us/library/bb671686(v=msads.90).aspx AdGroupPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses AdGroupPerformanceReportColumn
     * @uses AdGroupPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class AdGroupPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of columns to include in the report.
         * @var AdGroupPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var AdGroupPerformanceReportFilter
         */
        public $Filter;

        /**
         * The scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

    /**
     * Defines an ad group to include in the report.
     * @link http://msdn.microsoft.com/en-us/library/bb671622(v=msads.90).aspx AdGroupReportScope Data Object
     * 
     * @used-by AccountThroughAdGroupReportScope
     */
    final class AdGroupReportScope
    {
        /**
         * The identifier of the account that the ad group belongs to.
         * @var integer
         */
        public $AccountId;

        /**
         * The identifier of the campaign that the ad group belongs to.
         * @var integer
         */
        public $CampaignId;

        /**
         * The identifier of the ad group to limit the scope to.
         * @var integer
         */
        public $AdGroupId;
    }

    /**
     * Defines the criteria to use to filter the ad performance report request data.
     * @link http://msdn.microsoft.com/en-us/library/bb671609(v=msads.90).aspx AdPerformanceReportFilter Data Object
     * 
     * @uses AdDistributionReportFilter
     * @uses AdTypeReportFilter
     * @uses DeviceTypeReportFilter
     * @used-by AdPerformanceReportRequest
     */
    final class AdPerformanceReportFilter
    {
        /**
         * The report will include data for only the specified distribution medium.
         * @var AdDistributionReportFilter
         */
        public $AdDistribution;

        /**
         * The report will include data for only the specified ad types.
         * @var AdTypeReportFilter
         */
        public $AdType;

        /**
         * The report will include data for only the specified types of devices on which the ad is displayed.
         * @var DeviceTypeReportFilter
         */
        public $DeviceType;

        /**
         * The report will include data for only websites that used the specified languages.
         * @var string[]
         */
        public $LanguageCode;
    }

    /**
     * Defines an ad performance report request.
     * @link http://msdn.microsoft.com/en-us/library/bb672006(v=msads.90).aspx AdPerformanceReportRequest Data Object
     * 
     * @uses NonHourlyReportAggregation
     * @uses AdPerformanceReportColumn
     * @uses AdPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class AdPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var NonHourlyReportAggregation
         */
        public $Aggregation;

        /**
         * The list of columns to include in the report.
         * @var AdPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var AdPerformanceReportFilter
         */
        public $Filter;

        /**
         * The scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

    /**
     * Defines the criteria to use to filter the gender demographic report data.
     * @link http://msdn.microsoft.com/en-us/library/bb671580(v=msads.90).aspx AgeGenderDemographicReportFilter Data Object
     * 
     * @uses AdDistributionReportFilter
     * @used-by AgeGenderDemographicReportRequest
     */
    final class AgeGenderDemographicReportFilter
    {
        /**
         * The report will include data for only the specified distribution medium.
         * @var AdDistributionReportFilter
         */
        public $AdDistribution;

        /**
         * The report will include data for only websites that used the specified languages.
         * @var string[]
         */
        public $LanguageCode;
    }

    /**
     * Defines an age and gender demographic report request.
     * @link http://msdn.microsoft.com/en-us/library/bb671917(v=msads.90).aspx AgeGenderDemographicReportRequest Data Object
     * 
     * @uses NonHourlyReportAggregation
     * @uses AgeGenderDemographicReportColumn
     * @uses AgeGenderDemographicReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class AgeGenderDemographicReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var NonHourlyReportAggregation
         */
        public $Aggregation;

        /**
         * 
         * @var AgeGenderDemographicReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var AgeGenderDemographicReportFilter
         */
        public $Filter;

        /**
         * The scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

    /**
     * Defines a fault object that operations return when web service-specific errors occur, such as when the request message contains incomplete or invalid data.
     * @link http://msdn.microsoft.com/en-us/library/dn169136(v=msads.90).aspx ApiFaultDetail Data Object
     * 
     * @uses BatchError
     * @uses OperationError
     */
    final class ApiFaultDetail extends ApplicationFault
    {
        /**
         * An array of BatchError objects that identifies the items in the batch of items in the request message that caused the operation to fail.
         * @var BatchError[]
         */
        public $BatchErrors;

        /**
         * An array of OperationError objects that contains the reasons that explain why the service operation failed when the error is not related to a specific item in the batch of items.
         * @var OperationError[]
         */
        public $OperationErrors;
    }

    /**
     * Defines an error object that identifies the item within the batch of items in the request message that caused the operation to fail, and describes the reason for the failure.
     * @link http://msdn.microsoft.com/en-us/library/dn169134(v=msads.90).aspx BatchError Data Object
     * 
     * @used-by ApiFaultDetail
     */
    final class BatchError
    {
        /**
         * A numeric error code that identifies the error.
         * @var integer
         */
        public $Code;

        /**
         * A message that provides additional details about the batch error.
         * @var string
         */
        public $Details;

        /**
         * A symbolic string constant that identifies the error.
         * @var string
         */
        public $ErrorCode;

        /**
         * The zero-based index of the item in the batch of items in the request message that failed.
         * @var integer
         */
        public $Index;

        /**
         * A message that describes the error.
         * @var string
         */
        public $Message;
    }

    /**
     * Defines a budget summary report request.
     * @link http://msdn.microsoft.com/en-us/library/bb672028(v=msads.90).aspx BudgetSummaryReportRequest Data Object
     * 
     * @uses BudgetSummaryReportColumn
     * @uses AccountThroughCampaignReportScope
     * @uses BudgetSummaryReportTime
     */
    final class BudgetSummaryReportRequest extends ReportRequest
    {
        /**
         * The list of columns to include in the report.
         * @var BudgetSummaryReportColumn[]
         */
        public $Columns;

        /**
         * The scope of the report.
         * @var AccountThroughCampaignReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var BudgetSummaryReportTime
         */
        public $Time;
    }

    /**
     * Defines the date range values of a budget summary report request.
     * @link http://msdn.microsoft.com/en-us/library/bb671928(v=msads.90).aspx BudgetSummaryReportTime Data Object
     * 
     * @uses Date
     * @uses BudgetSummaryReportTimePeriod
     * @used-by BudgetSummaryReportRequest
     */
    final class BudgetSummaryReportTime
    {
        /**
         * The end date of a date range.
         * @var Date
         */
        public $CustomDateRangeEnd;

        /**
         * The start date of a date range.
         * @var Date
         */
        public $CustomDateRangeStart;

        /**
         * A predefined date range.
         * @var BudgetSummaryReportTimePeriod
         */
        public $PredefinedTime;
    }

    /**
     * Defines a call detail report request.
     * @link http://msdn.microsoft.com/en-us/library/dn195845(v=msads.90).aspx CallDetailReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses CallDetailReportColumn
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class CallDetailReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of columns to include in the report.
         * @var CallDetailReportColumn[]
         */
        public $Columns;

        /**
         * The scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

    /**
     * Defines the criteria to use to filter the campaign performance report data.
     * @link http://msdn.microsoft.com/en-us/library/bb671808(v=msads.90).aspx CampaignPerformanceReportFilter Data Object
     * 
     * @uses AdDistributionReportFilter
     * @uses DeviceOSReportFilter
     * @uses DeviceTypeReportFilter
     * @uses CampaignStatusReportFilter
     * @used-by CampaignPerformanceReportRequest
     */
    final class CampaignPerformanceReportFilter
    {
        /**
         * The report will include data for only the specified distribution medium.
         * @var AdDistributionReportFilter
         */
        public $AdDistribution;

        /**
         * The report will include data where the ad is displayed on the specified device operating systems.
         * @var DeviceOSReportFilter
         */
        public $DeviceOS;

        /**
         * The report will include data where the ad is displayed on the specified device types.
         * @var DeviceTypeReportFilter
         */
        public $DeviceType;

        /**
         * The report will include data for only the specified ad group status values.
         * @var CampaignStatusReportFilter
         */
        public $Status;
    }

    /**
     * Defines a campaign performance report request.
     * @link http://msdn.microsoft.com/en-us/library/bb671804(v=msads.90).aspx CampaignPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses CampaignPerformanceReportColumn
     * @uses CampaignPerformanceReportFilter
     * @uses AccountThroughCampaignReportScope
     * @uses ReportTime
     */
    final class CampaignPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of columns to include in the report.
         * @var CampaignPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var CampaignPerformanceReportFilter
         */
        public $Filter;

        /**
         * The scope of the report.
         * @var AccountThroughCampaignReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

    /**
     * Defines a campaign to include in the report.
     * @link http://msdn.microsoft.com/en-us/library/bb671721(v=msads.90).aspx CampaignReportScope Data Object
     * 
     * @used-by AccountThroughAdGroupReportScope
     * @used-by AccountThroughCampaignReportScope
     */
    final class CampaignReportScope
    {
        /**
         * The identifier of the account that the campaign belongs to.
         * @var integer
         */
        public $AccountId;

        /**
         * The identifier of the campaign to limit the scope to.
         * @var integer
         */
        public $CampaignId;
    }

    /**
     * Defines the criteria to use to filter the conversion performance report data.
     * @link http://msdn.microsoft.com/en-us/library/gg262849(v=msads.90).aspx ConversionPerformanceReportFilter Data Object
     * 
     * @uses DeviceTypeReportFilter
     * @used-by ConversionPerformanceReportRequest
     */
    final class ConversionPerformanceReportFilter
    {
        /**
         * The report will include data for only the specified types of devices on which the ad is displayed.
         * @var DeviceTypeReportFilter
         */
        public $DeviceType;

        /**
         * The report will include data for only the specified keywords.
         * @var string[]
         */
        public $Keywords;
    }

    /**
     * Defines a conversion performance report request.
     * @link http://msdn.microsoft.com/en-us/library/gg262843(v=msads.90).aspx ConversionPerformanceReportRequest Data Object
     * 
     * @uses NonHourlyReportAggregation
     * @uses ConversionPerformanceReportColumn
     * @uses ConversionPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class ConversionPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var NonHourlyReportAggregation
         */
        public $Aggregation;

        /**
         * The list of columns to include in the report.
         * @var ConversionPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var ConversionPerformanceReportFilter
         */
        public $Filter;

        /**
         * The scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

    /**
     * Defines a calendar date by month, day, and year.
     * @link http://msdn.microsoft.com/en-us/library/dn376514(v=msads.90).aspx Date Data Object
     * 
     * @used-by BudgetSummaryReportTime
     * @used-by ReportTime
     */
    final class Date
    {
        /**
         * Specifies the day of the month.
         * @var integer
         */
        public $Day;

        /**
         * Specifies the month.
         * @var integer
         */
        public $Month;

        /**
         * Specifies the year.
         * @var integer
         */
        public $Year;
    }

    /**
     * Defines the criteria to use to filter the destination URL performance report data.
     * @link http://msdn.microsoft.com/en-us/library/bb671544(v=msads.90).aspx DestinationUrlPerformanceReportFilter Data Object
     * 
     * @uses AdDistributionReportFilter
     * @uses DeviceTypeReportFilter
     * @used-by DestinationUrlPerformanceReportRequest
     */
    final class DestinationUrlPerformanceReportFilter
    {
        /**
         * The report will include data for only the specified distribution medium.
         * @var AdDistributionReportFilter
         */
        public $AdDistribution;

        /**
         * The report will include data for only the specified types of devices on which the ad is displayed.
         * @var DeviceTypeReportFilter
         */
        public $DeviceType;

        /**
         * The report will include data for only websites that used the specified languages.
         * @var string[]
         */
        public $LanguageCode;
    }

    /**
     * Defines a destination URL performance report request.
     * @link http://msdn.microsoft.com/en-us/library/bb671480(v=msads.90).aspx DestinationUrlPerformanceReportRequest Data Object
     * 
     * @uses NonHourlyReportAggregation
     * @uses DestinationUrlPerformanceReportColumn
     * @uses DestinationUrlPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class DestinationUrlPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var NonHourlyReportAggregation
         */
        public $Aggregation;

        /**
         * The list of columns to include in the report.
         * @var DestinationUrlPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var DestinationUrlPerformanceReportFilter
         */
        public $Filter;

        /**
         * The scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

    /**
     * Defines the criteria to use to filter the geographical location report data.
     * @link http://msdn.microsoft.com/en-us/library/dn393954(v=msads.90).aspx GeographicalLocationReportFilter Data Object
     * 
     * @uses AdDistributionReportFilter
     * @used-by GeographicalLocationReportRequest
     */
    final class GeographicalLocationReportFilter
    {
        /**
         * The report will include data for only the specified distribution medium.
         * @var AdDistributionReportFilter
         */
        public $AdDistribution;

        /**
         * The report will include data for only the specified countries/regions where the user that clicked the ad is located.
         * @var string[]
         */
        public $CountryCode;

        /**
         * The report will include data for only websites that used the specified languages.
         * @var string[]
         */
        public $LanguageCode;
    }

    /**
     * Defines a geographical location report request.
     * @link http://msdn.microsoft.com/en-us/library/dn393955(v=msads.90).aspx GeographicalLocationReportRequest Data Object
     * 
     * @uses NonHourlyReportAggregation
     * @uses GeographicalLocationReportColumn
     * @uses GeographicalLocationReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class GeographicalLocationReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var NonHourlyReportAggregation
         */
        public $Aggregation;

        /**
         * The list of columns to include in the report.
         * @var GeographicalLocationReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var GeographicalLocationReportFilter
         */
        public $Filter;

        /**
         * The scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

    /**
     * Defines the criteria to use to filter the goals and funnels report data.
     * @link http://msdn.microsoft.com/en-us/library/gg262854(v=msads.90).aspx GoalsAndFunnelsReportFilter Data Object
     * 
     * @used-by GoalsAndFunnelsReportRequest
     */
    final class GoalsAndFunnelsReportFilter
    {
        /**
         * The report will include data for only the specified goals.
         * @var integer[]
         */
        public $GoalIds;
    }

    /**
     * Defines a goals and funnels report request.
     * @link http://msdn.microsoft.com/en-us/library/gg262840(v=msads.90).aspx GoalsAndFunnelsReportRequest Data Object
     * 
     * @uses NonHourlyReportAggregation
     * @uses GoalsAndFunnelsReportColumn
     * @uses GoalsAndFunnelsReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class GoalsAndFunnelsReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var NonHourlyReportAggregation
         */
        public $Aggregation;

        /**
         * The list of columns to include in the report.
         * @var GoalsAndFunnelsReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var GoalsAndFunnelsReportFilter
         */
        public $Filter;

        /**
         * The scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

    /**
     * Defines the criteria to use to filter the keyword performance report data.
     * @link http://msdn.microsoft.com/en-us/library/bb672082(v=msads.90).aspx KeywordPerformanceReportFilter Data Object
     * 
     * @uses AdDistributionReportFilter
     * @uses AdTypeReportFilter
     * @uses BidMatchTypeReportFilter
     * @uses DeliveredMatchTypeReportFilter
     * @uses DeviceTypeReportFilter
     * @used-by KeywordPerformanceReportRequest
     */
    final class KeywordPerformanceReportFilter
    {
        /**
         * The report will include data for only the specified distribution medium.
         * @var AdDistributionReportFilter
         */
        public $AdDistribution;

        /**
         * The report will include data for only the specified ad types.
         * @var AdTypeReportFilter
         */
        public $AdType;

        /**
         * The report will include data for only the specified bid match types (as opposed to the delivered match type).
         * @var BidMatchTypeReportFilter
         */
        public $BidMatchType;

        /**
         * The report will include data for only the specified delivered match types (as opposed to the bid match type).
         * @var DeliveredMatchTypeReportFilter
         */
        public $DeliveredMatchType;

        /**
         * The report will include data for only the specified types of devices on which the ad is displayed.
         * @var DeviceTypeReportFilter
         */
        public $DeviceType;

        /**
         * The report will include data for only keywords with the specified relevance.
         * @var integer[]
         */
        public $KeywordRelevance;

        /**
         * The report will include data for only the specified keywords.
         * @var string[]
         */
        public $Keywords;

        /**
         * The report will include data for only the specified landing page relevance.
         * @var integer[]
         */
        public $LandingPageRelevance;

        /**
         * The report will include data for only the specified landing page user experience.
         * @var integer[]
         */
        public $LandingPageUserExperience;

        /**
         * The report will include data for only websites that used the specified languages.
         * @var string[]
         */
        public $LanguageCode;

        /**
         * The report will include data for only keywords with the specified quality scores.
         * @var integer[]
         */
        public $QualityScore;
    }

    /**
     * Defines a keyword performance report request.
     * @link http://msdn.microsoft.com/en-us/library/bb671816(v=msads.90).aspx KeywordPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses KeywordPerformanceReportColumn
     * @uses KeywordPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses KeywordPerformanceReportSort
     * @uses ReportTime
     */
    final class KeywordPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of columns to include in the report.
         * @var KeywordPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var KeywordPerformanceReportFilter
         */
        public $Filter;

        /**
         * The top number of data rows to return in the report.
         * @var integer
         */
        public $MaxRows;

        /**
         * The scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;

        /**
         * A list of the columns to sort, and the corresponding sort order.
         * @var KeywordPerformanceReportSort[]
         */
        public $Sort;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

    /**
     * Defines a keyword performance report column and corresponding sort order.
     * @link http://msdn.microsoft.com/en-us/library/dn342799(v=msads.90).aspx KeywordPerformanceReportSort Data Object
     * 
     * @uses KeywordPerformanceReportColumn
     * @uses SortOrder
     * @used-by KeywordPerformanceReportRequest
     */
    final class KeywordPerformanceReportSort
    {
        /**
         * The keyword performance report column by which to sort.
         * @var KeywordPerformanceReportColumn
         */
        public $SortColumn;

        /**
         * Defines the ascending or descending sort order of values within the specified report column.
         * @var SortOrder
         */
        public $SortOrder;
    }

    /**
     * Defines a negative keyword conflict report request.
     * @link http://msdn.microsoft.com/en-us/library/hh560534(v=msads.90).aspx NegativeKeywordConflictReportRequest Data Object
     * 
     * @uses NegativeKeywordConflictReportColumn
     * @uses AccountThroughAdGroupReportScope
     */
    final class NegativeKeywordConflictReportRequest extends ReportRequest
    {
        /**
         * The list of columns to include in the report.
         * @var NegativeKeywordConflictReportColumn[]
         */
        public $Columns;

        /**
         * The scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;
    }

    /**
     * Defines an error object that contains the details that explain why the service operation failed.
     * @link http://msdn.microsoft.com/en-us/library/dn169135(v=msads.90).aspx OperationError Data Object
     * 
     * @used-by ApiFaultDetail
     */
    final class OperationError
    {
        /**
         * A numeric error code that identifies the error
         * @var integer
         */
        public $Code;

        /**
         * A message that provides additional details about the error.
         * @var string
         */
        public $Details;

        /**
         * A symbolic string constant that identifies the error.
         * @var string
         */
        public $ErrorCode;

        /**
         * A message that describes the error.
         * @var string
         */
        public $Message;
    }

    /**
     * Defines the criteria to use to filter the product target performance report data.
     * @link http://msdn.microsoft.com/en-us/library/dn195847(v=msads.90).aspx ProductTargetPerformanceReportFilter Data Object
     * 
     * @uses DeviceTypeReportFilter
     * @used-by ProductTargetPerformanceReportRequest
     */
    final class ProductTargetPerformanceReportFilter
    {
        /**
         * The report will include data for only the specified types of devices on which the ad is displayed.
         * @var DeviceTypeReportFilter
         */
        public $DeviceType;

        /**
         * The report will include data for only websites that used the specified languages.
         * @var string[]
         */
        public $LanguageCode;
    }

    /**
     * Defines a product target performance report request.
     * @link http://msdn.microsoft.com/en-us/library/dn195846(v=msads.90).aspx ProductTargetPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses ProductTargetPerformanceReportColumn
     * @uses ProductTargetPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class ProductTargetPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of columns to include in the report.
         * @var ProductTargetPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var ProductTargetPerformanceReportFilter
         */
        public $Filter;

        /**
         * The scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

    /**
     * Defines the criteria to use to filter the publisher usage performance report data.
     * @link http://msdn.microsoft.com/en-us/library/dd796865(v=msads.90).aspx PublisherUsagePerformanceReportFilter Data Object
     * 
     * @uses AdDistributionReportFilter
     * @uses PricingModelReportFilter
     * @used-by PublisherUsagePerformanceReportRequest
     */
    final class PublisherUsagePerformanceReportFilter
    {
        /**
         * The report will include data for only the specified distribution medium.
         * @var AdDistributionReportFilter
         */
        public $AdDistribution;

        /**
         * The report will include data for only websites that used the specified languages.
         * @var string[]
         */
        public $LanguageCode;

        /**
         * The report will include data for only the specified pricing model.
         * @var PricingModelReportFilter
         */
        public $PricingModel;
    }

    /**
     * Defines a publisher usage performance report request.
     * @link http://msdn.microsoft.com/en-us/library/dd797229(v=msads.90).aspx PublisherUsagePerformanceReportRequest Data Object
     * 
     * @uses NonHourlyReportAggregation
     * @uses PublisherUsagePerformanceReportColumn
     * @uses PublisherUsagePerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class PublisherUsagePerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var NonHourlyReportAggregation
         */
        public $Aggregation;

        /**
         * The list of columns to include in the report.
         * @var PublisherUsagePerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var PublisherUsagePerformanceReportFilter
         */
        public $Filter;

        /**
         * The scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

    /**
     * Defines the status of a report request.
     * @link http://msdn.microsoft.com/en-us/library/bb672100(v=msads.90).aspx ReportRequestStatus Data Object
     * 
     * @uses ReportRequestStatusType
     * @used-by PollGenerateReportResponse
     */
    final class ReportRequestStatus
    {
        /**
         * The URL from where the report can be downloaded.
         * @var string
         */
        public $ReportDownloadUrl;

        /**
         * The status of a report request.
         * @var ReportRequestStatusType
         */
        public $Status;
    }

    /**
     * Defines the date range values of a report request.
     * @link http://msdn.microsoft.com/en-us/library/bb671895(v=msads.90).aspx ReportTime Data Object
     * 
     * @uses Date
     * @uses ReportTimePeriod
     * @used-by AccountPerformanceReportRequest
     * @used-by AdDynamicTextPerformanceReportRequest
     * @used-by AdExtensionByAdReportRequest
     * @used-by AdExtensionByKeywordReportRequest
     * @used-by AdExtensionDetailReportRequest
     * @used-by AdGroupPerformanceReportRequest
     * @used-by AdPerformanceReportRequest
     * @used-by AgeGenderDemographicReportRequest
     * @used-by CallDetailReportRequest
     * @used-by CampaignPerformanceReportRequest
     * @used-by ConversionPerformanceReportRequest
     * @used-by DestinationUrlPerformanceReportRequest
     * @used-by GeographicalLocationReportRequest
     * @used-by GoalsAndFunnelsReportRequest
     * @used-by KeywordPerformanceReportRequest
     * @used-by ProductTargetPerformanceReportRequest
     * @used-by PublisherUsagePerformanceReportRequest
     * @used-by RichAdComponentPerformanceReportRequest
     * @used-by SearchCampaignChangeHistoryReportRequest
     * @used-by SearchQueryPerformanceReportRequest
     * @used-by ShareOfVoiceReportRequest
     * @used-by SitePerformanceReportRequest
     * @used-by TacticChannelReportRequest
     * @used-by TrafficSourcesReportRequest
     */
    final class ReportTime
    {
        /**
         * The end date of the custom date range.
         * @var Date
         */
        public $CustomDateRangeEnd;

        /**
         * The start date of the custom date range.
         * @var Date
         */
        public $CustomDateRangeStart;

        /**
         * A predefined date range value.
         * @var ReportTimePeriod
         */
        public $PredefinedTime;
    }

    /**
     * Defines the criteria to use to filter the rich ad component keyword performance report data.
     * @link http://msdn.microsoft.com/en-us/library/hh180147(v=msads.90).aspx RichAdComponentPerformanceReportFilter Data Object
     * 
     * @uses ComponentTypeFilter
     * @uses RichAdSubTypeFilter
     * @used-by RichAdComponentPerformanceReportRequest
     */
    final class RichAdComponentPerformanceReportFilter
    {
        /**
         * The report will include data for only the specified components.
         * @var ComponentTypeFilter
         */
        public $ComponentType;

        /**
         * The report will include data for only the specified rich ad types.
         * @var RichAdSubTypeFilter
         */
        public $RichAdSubType;
    }

    /**
     * Defines a rich ad performance report request.
     * @link http://msdn.microsoft.com/en-us/library/hh180150(v=msads.90).aspx RichAdComponentPerformanceReportRequest Data Object
     * 
     * @uses NonHourlyReportAggregation
     * @uses RichAdComponentPerformanceReportColumn
     * @uses RichAdComponentPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class RichAdComponentPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var NonHourlyReportAggregation
         */
        public $Aggregation;

        /**
         * The list of columns to include in the report.
         * @var RichAdComponentPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var RichAdComponentPerformanceReportFilter
         */
        public $Filter;

        /**
         * The scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

    /**
     * Defines the criteria to use to filter the campaign change history report data.
     * @link http://msdn.microsoft.com/en-us/library/hh912356(v=msads.90).aspx SearchCampaignChangeHistoryReportFilter Data Object
     * 
     * @uses ChangeTypeReportFilter
     * @uses ChangeEntityReportFilter
     * @used-by SearchCampaignChangeHistoryReportRequest
     */
    final class SearchCampaignChangeHistoryReportFilter
    {
        /**
         * The report will include data for only the specified type of change.
         * @var ChangeTypeReportFilter
         */
        public $HowChanged;

        /**
         * The report will include data for only the specified type of entity.
         * @var ChangeEntityReportFilter
         */
        public $ItemChanged;
    }

    /**
     * Defines a change history report request.
     * @link http://msdn.microsoft.com/en-us/library/hh912357(v=msads.90).aspx SearchCampaignChangeHistoryReportRequest Data Object
     * 
     * @uses SearchCampaignChangeHistoryReportColumn
     * @uses SearchCampaignChangeHistoryReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class SearchCampaignChangeHistoryReportRequest extends ReportRequest
    {
        /**
         * The list of columns to include in the report.
         * @var SearchCampaignChangeHistoryReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var SearchCampaignChangeHistoryReportFilter
         */
        public $Filter;

        /**
         * The scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

    /**
     * Defines the criteria to use to filter the search query performance report data.
     * @link http://msdn.microsoft.com/en-us/library/ee703961(v=msads.90).aspx SearchQueryPerformanceReportFilter Data Object
     * 
     * @uses AdStatusReportFilter
     * @uses AdTypeReportFilter
     * @uses CampaignStatusReportFilter
     * @uses DeliveredMatchTypeReportFilter
     * @used-by SearchQueryPerformanceReportRequest
     */
    final class SearchQueryPerformanceReportFilter
    {
        /**
         * The report will include data for ads that have the specified status value.
         * @var AdStatusReportFilter
         */
        public $AdStatus;

        /**
         * The report will include data for only the specified ad types.
         * @var AdTypeReportFilter
         */
        public $AdType;

        /**
         * The report will include data for campaigns that have the specified status value.
         * @var CampaignStatusReportFilter
         */
        public $CampaignStatus;

        /**
         * The report will include data for only the specified delivered match types (as opposed to the bid match type).
         * @var DeliveredMatchTypeReportFilter
         */
        public $DeliveredMatchType;

        /**
         * The report will include data for only websites that used the specified languages.
         * @var string[]
         */
        public $LanguageCode;

        /**
         * The report will include data for only the specified search query strings.
         * @var string[]
         */
        public $SearchQueries;
    }

    /**
     * Defines a search query performance report request.
     * @link http://msdn.microsoft.com/en-us/library/ee703962(v=msads.90).aspx SearchQueryPerformanceReportRequest Data Object
     * 
     * @uses SearchQueryReportAggregation
     * @uses SearchQueryPerformanceReportColumn
     * @uses SearchQueryPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class SearchQueryPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var SearchQueryReportAggregation
         */
        public $Aggregation;

        /**
         * The list of columns to include in the report.
         * @var SearchQueryPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var SearchQueryPerformanceReportFilter
         */
        public $Filter;

        /**
         * The scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

    /**
     * Defines the criteria to use to filter the share of voice report data.
     * @link http://msdn.microsoft.com/en-us/library/jj592908(v=msads.90).aspx ShareOfVoiceReportFilter Data Object
     * 
     * @uses AdDistributionReportFilter
     * @uses BidMatchTypeReportFilter
     * @uses DeliveredMatchTypeReportFilter
     * @used-by ShareOfVoiceReportRequest
     */
    final class ShareOfVoiceReportFilter
    {
        /**
         * The report will include data for only the specified distribution medium.
         * @var AdDistributionReportFilter
         */
        public $AdDistribution;

        /**
         * The report will include data for only the specified bid match types (as opposed to the delivered match type).
         * @var BidMatchTypeReportFilter
         */
        public $BidMatchType;

        /**
         * The report will include data for only the specified delivered match types (as opposed to the bid match type).
         * @var DeliveredMatchTypeReportFilter
         */
        public $DeliveredMatchType;

        /**
         * The report will include data for only the specified keywords.
         * @var string[]
         */
        public $Keywords;

        /**
         * The report will include data for only websites that used the specified languages.
         * @var string[]
         */
        public $LanguageCode;
    }

    /**
     * Defines a share of voice (SOV) report request.
     * @link http://msdn.microsoft.com/en-us/library/jj592909(v=msads.90).aspx ShareOfVoiceReportRequest Data Object
     * 
     * @uses NonHourlyReportAggregation
     * @uses ShareOfVoiceReportColumn
     * @uses ShareOfVoiceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class ShareOfVoiceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var NonHourlyReportAggregation
         */
        public $Aggregation;

        /**
         * The list of columns to include in the report.
         * @var ShareOfVoiceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var ShareOfVoiceReportFilter
         */
        public $Filter;

        /**
         * The scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

    /**
     * Defines the criteria to use to filter the website performance report data.
     * @link http://msdn.microsoft.com/en-us/library/dd796955(v=msads.90).aspx SitePerformanceReportFilter Data Object
     * 
     * @uses AdDistributionReportFilter
     * @uses AdTypeReportFilter
     * @uses DeliveredMatchTypeReportFilter
     * @uses DeviceTypeReportFilter
     * @used-by SitePerformanceReportRequest
     */
    final class SitePerformanceReportFilter
    {
        /**
         * The report will include data for only the specified distribution medium.
         * @var AdDistributionReportFilter
         */
        public $AdDistribution;

        /**
         * The report will include data for only the specified ad types.
         * @var AdTypeReportFilter
         */
        public $AdType;

        /**
         * The report will include data for only the specified delivered match types (as opposed to the bid match type).
         * @var DeliveredMatchTypeReportFilter
         */
        public $DeliveredMatchType;

        /**
         * The report will include data for only the specified types of devices on which the ad is displayed.
         * @var DeviceTypeReportFilter
         */
        public $DeviceType;

        /**
         * The report will include data for only websites that used the specified languages.
         * @var string[]
         */
        public $LanguageCode;

        /**
         * The report will include data for only the specified websites.
         * @var integer[]
         */
        public $SiteIds;
    }

    /**
     * Defines a site performance report request.
     * @link http://msdn.microsoft.com/en-us/library/dd797220(v=msads.90).aspx SitePerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses SitePerformanceReportColumn
     * @uses SitePerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class SitePerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of columns to include in the report.
         * @var SitePerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var SitePerformanceReportFilter
         */
        public $Filter;

        /**
         * The scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

    /**
     * Defines the criteria to use to filter the tactic and channel report data.
     * @link http://msdn.microsoft.com/en-us/library/gg262855(v=msads.90).aspx TacticChannelReportFilter Data Object
     * 
     * @used-by TacticChannelReportRequest
     */
    final class TacticChannelReportFilter
    {
        /**
         * The report will include data for only the specified channels.
         * @var integer[]
         */
        public $ChannelIds;

        /**
         * The report will include data for only the specified tactics.
         * @var integer[]
         */
        public $TacticIds;

        /**
         * The report will include data for only the specified ad groups.
         * @var integer[]
         */
        public $ThirdPartyAdGroupIds;

        /**
         * The report will include data for only the specified campaigns.
         * @var integer[]
         */
        public $ThirdPartyCampaignIds;
    }

    /**
     * Defines a tactic and channel report request.
     * @link http://msdn.microsoft.com/en-us/library/gg262842(v=msads.90).aspx TacticChannelReportRequest Data Object
     * 
     * @uses NonHourlyReportAggregation
     * @uses TacticChannelReportColumn
     * @uses TacticChannelReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class TacticChannelReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var NonHourlyReportAggregation
         */
        public $Aggregation;

        /**
         * The list of columns to include in the report.
         * @var TacticChannelReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var TacticChannelReportFilter
         */
        public $Filter;

        /**
         * The scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

    /**
     * Defines the criteria to use to filter the traffic sources report data.
     * @link http://msdn.microsoft.com/en-us/library/gg262844(v=msads.90).aspx TrafficSourcesReportFilter Data Object
     * 
     * @used-by TrafficSourcesReportRequest
     */
    final class TrafficSourcesReportFilter
    {
        /**
         * The report will include data for only the specified goals.
         * @var integer[]
         */
        public $GoalIds;
    }

    /**
     * Defines a traffic sources report request.
     * @link http://msdn.microsoft.com/en-us/library/gg262853(v=msads.90).aspx TrafficSourcesReportRequest Data Object
     * 
     * @uses NonHourlyReportAggregation
     * @uses TrafficSourcesReportColumn
     * @uses TrafficSourcesReportFilter
     * @uses AccountReportScope
     * @uses ReportTime
     */
    final class TrafficSourcesReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var NonHourlyReportAggregation
         */
        public $Aggregation;

        /**
         * The list of columns to include in the report.
         * @var TrafficSourcesReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var TrafficSourcesReportFilter
         */
        public $Filter;

        /**
         * The scope of the report.
         * @var AccountReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

    /**
     * Gets the status of a report request.
     * @link http://msdn.microsoft.com/en-us/library/jj879320(v=msads.90).aspx PollGenerateReport Request Object
     * 
     * @used-by BingAdsReportingService::PollGenerateReport
     */
    final class PollGenerateReportRequest
    {
        /**
         * The identifier of the report request.
         * @var string
         */
        public $ReportRequestId;
    }

    /**
     * Gets the status of a report request.
     * @link http://msdn.microsoft.com/en-us/library/jj879320(v=msads.90).aspx PollGenerateReport Response Object
     * 
     * @uses ReportRequestStatus
     * @used-by BingAdsReportingService::PollGenerateReport
     */
    final class PollGenerateReportResponse
    {
        /**
         * Contains the status of the report request and the download URL.
         * @var ReportRequestStatus
         */
        public $ReportRequestStatus;
    }

    /**
     * Submits a report request.
     * @link http://msdn.microsoft.com/en-us/library/jj879321(v=msads.90).aspx SubmitGenerateReport Request Object
     * 
     * @uses ReportRequest
     * @used-by BingAdsReportingService::SubmitGenerateReport
     */
    final class SubmitGenerateReportRequest
    {
        /**
         * The report request.
         * @var ReportRequest
         */
        public $ReportRequest;
    }

    /**
     * Submits a report request.
     * @link http://msdn.microsoft.com/en-us/library/jj879321(v=msads.90).aspx SubmitGenerateReport Response Object
     * 
     * @used-by BingAdsReportingService::SubmitGenerateReport
     */
    final class SubmitGenerateReportResponse
    {
        /**
         * The identifier of the report request.
         * @var string
         */
        public $ReportRequestId;
    }
}
