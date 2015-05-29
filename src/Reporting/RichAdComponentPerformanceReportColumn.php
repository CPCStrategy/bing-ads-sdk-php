<?php

namespace BingAds\Reporting;

/**
 * Defines the attributes and performance statistics columns that you can include in the RichAdComponentPerformanceReportRequest.
 *
 * @link http://msdn.microsoft.com/en-us/library/hh180149(v=msads.90).aspx RichAdComponentPerformanceReportColumn Value Set
 *
 * @used-by RichAdComponentPerformanceReportRequest
 */
final class RichAdComponentPerformanceReportColumn
{
    /** The Name element of an Account. */
    const ACCOUNT_NAME = 'AccountName';
    /** The Number element of an Account. */
    const ACCOUNT_NUMBER = 'AccountNumber';
    /** The Id element of an Account. */
    const ACCOUNT_ID = 'AccountId';
    /** The time period of each report row. */
    const TIME_PERIOD = 'TimePeriod';
    /** The Id element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
    const AD_ID = 'AdId';
    /** The Title element of a MobileAd or TextAd. */
    const AD_TITLE = 'AdTitle';
    /** The Name element of a Campaign. */
    const CAMPAIGN_NAME = 'CampaignName';
    /** The Id element of a Campaign. */
    const CAMPAIGN_ID = 'CampaignId';
    /** The Name element of an AdGroup. */
    const AD_GROUP_NAME = 'AdGroupName';
    /** The Id element of an AdGroup. */
    const AD_GROUP_ID = 'AdGroupId';
    /** The rich ad component type. */
    const RICH_AD_SUB_TYPE = 'RichAdSubType';
    /** The component type of the rich ad that was clicked. */
    const COMPONENT_TYPE = 'ComponentType';
    /** The title of the rich ad component. */
    const COMPONENT_TITLE = 'ComponentTitle';
    /** The destination URL of the rich ad component. */
    const COMPONENT_DESTINATION_URL = 'ComponentDestinationURL';
    /** The number of billable clicks of a rich ad. */
    const COMPONENT_CLICKS = 'ComponentClicks';
    /** The number of clicks that occur on different components of the ad after the first click but within the short, system-defined interval. */
    const COMPONENT_NON_BILLABLE_CLICKS = 'ComponentNonBillableClicks';
    /** The number of times that all components of the ad were clicked. */
    const COMPONENT_TOTAL_CLICKS = 'ComponentTotalClicks';
    /** The click-through rate of all components of the ad that were clicked. */
    const COMPONENT_CTR = 'ComponentCTR';
}
