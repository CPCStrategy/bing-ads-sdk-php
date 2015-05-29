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
    /** The AdDistribution element of an AdGroup. */
    const AD_DISTRIBUTION = 'AdDistribution';
    /** The age group of the audience who might have viewed the ad, if known. */
    const AGE_GROUP = 'AgeGroup';
    /** The gender of the audience who might have viewed the ad, if known. */
    const GENDER = 'Gender';
    /** The estimated number of times that an ad could be served to a particular age group or gender, divided by the total number of estimated impressions for all demographics. */
    const ESTIMATED_IMPRESSION_PERCENT = 'EstimatedImpressionPercent';
    /** The estimated number of times that an ad will be clicked by a particular age group or gender, divided by the total number of estimated clicks for all demographics. */
    const ESTIMATED_CLICK_PERCENT = 'EstimatedClickPercent';
    /** The estimated click-through rate (Ctr) as a percentage. */
    const ESTIMATED_CTR = 'EstimatedCtr';
    /** The Language element of an AdGroup. */
    const LANGUAGE = 'Language';
}
