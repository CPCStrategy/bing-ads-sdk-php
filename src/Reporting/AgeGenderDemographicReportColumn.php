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
    /** The AdDistribution element of an AdGroup. */
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
    /** The Language element of an AdGroup. */
    const Language = 'Language';
}
