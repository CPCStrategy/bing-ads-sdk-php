<?php

namespace BingAds\Reporting;

/**
 * Defines the attributes and performance statistics columns that you can include in the AgeGenderDemographicReportRequest.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671786(v=msads.90).aspx AgeGenderDemographicReportColumn Value Set
 * 
 * @used-by AgeGenderDemographicReportRequest
 */
final class AgeGenderDemographicReportColumn
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
    /** The ad distribution attribute of an ad group. */
    const AdDistribution = 'AdDistribution';
    /** The age group of the audience who might have viewed the ad, if known. */
    const AgeGroup = 'AgeGroup';
    /** The gender of the audience who might have viewed the ad, if known. */
    const Gender = 'Gender';
    /** The estimated number of times that an ad could be served to a particular age group or gender, divided by the total number of estimated impressions for all demographics. */
    const EstimatedImpressionPercent = 'EstimatedImpressionPercent';
    /** The estimated number of times that an ad will be clicked by a particular age group or gender, divided by the total number of estimated clicks for all demographics. */
    const EstimatedClickPercent = 'EstimatedClickPercent';
    /** The estimated click-through rate (Ctr) as a percentage. */
    const EstimatedCtr = 'EstimatedCtr';
    /** The ad group language. */
    const Language = 'Language';
}
