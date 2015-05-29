<?php

namespace BingAds\Reporting;

/**
 * Defines the attributes and performance statistics columns that you can include in the TrafficSourcesReportRequest.
 *
 * @link http://msdn.microsoft.com/en-us/library/gg262847(v=msads.90).aspx TrafficSourcesReportColumn Value Set
 *
 * @used-by TrafficSourcesReportRequest
 */
final class TrafficSourcesReportColumn
{
    /** The Name element of an Account. */
    const ACCOUNT_NAME = 'AccountName';
    /** The Number element of an Account. */
    const ACCOUNT_NUMBER = 'AccountNumber';
    /** The Id element of an Account. */
    const ACCOUNT_ID = 'AccountId';
    /** The time period of each report row. */
    const TIME_PERIOD = 'TimePeriod';
    /** The origin of the advertising traffic, which is one of the following: */
    const SOURCE = 'Source';
    /** The name of your event tracking or campaign analytics goal. */
    const GOAL = 'Goal';
    /** The number of times that a user entered step 1 of the funnel. */
    const STEP1_COUNT = 'Step1Count';
    /** The number of times that a user entered step 2 of the funnel. */
    const STEP2_COUNT = 'Step2Count';
    /** The number of times that a user entered step 3 of the funnel. */
    const STEP3_COUNT = 'Step3Count';
    /** The number of times that a user entered step 4 of the funnel. */
    const STEP4_COUNT = 'Step4Count';
    /** The number of times that a user entered step 5 of the funnel. */
    const STEP5_COUNT = 'Step5Count';
    /** The number of conversions. */
    const CONVERSIONS = 'Conversions';
    /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
    const ASSISTS = 'Assists';
    /** The funnel conversion rate is the percent of conversions completed by users who at minimum visited the webpage corresponding to step 1 of your goal. */
    const FUNNEL_CONVERSION_RATE = 'FunnelConversionRate';
    /** The revenue optionally reported by the advertiser as a result of conversions. */
    const REVENUE = 'Revenue';
    /** The revenue per conversion. */
    const REVENUE_PER_CONVERSION = 'RevenuePerConversion';
}
