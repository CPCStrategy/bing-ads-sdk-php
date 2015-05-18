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
    const AccountName = 'AccountName';
    /** The Number element of an Account. */
    const AccountNumber = 'AccountNumber';
    /** The Id element of an Account. */
    const AccountId = 'AccountId';
    /** The time period of each report row. */
    const TimePeriod = 'TimePeriod';
    /** The Id element of a MobileAd, ProductAd, or TextAd, which is inherited from the Ad base object. */
    const AdId = 'AdId';
    /** The Title element of a MobileAd or TextAd. */
    const AdTitle = 'AdTitle';
    /** The Name element of a Campaign. */
    const CampaignName = 'CampaignName';
    /** The Id element of a Campaign. */
    const CampaignId = 'CampaignId';
    /** The Name element of an AdGroup. */
    const AdGroupName = 'AdGroupName';
    /** The Id element of an AdGroup. */
    const AdGroupId = 'AdGroupId';
    /** The rich ad component type. */
    const RichAdSubType = 'RichAdSubType';
    /** The component type of the rich ad that was clicked. */
    const ComponentType = 'ComponentType';
    /** The title of the rich ad component. */
    const ComponentTitle = 'ComponentTitle';
    /** The destination URL of the rich ad component. */
    const ComponentDestinationURL = 'ComponentDestinationURL';
    /** The number of billable clicks of a rich ad. */
    const ComponentClicks = 'ComponentClicks';
    /** The number of clicks that occur on different components of the ad after the first click but within the short, system-defined interval. */
    const ComponentNonBillableClicks = 'ComponentNonBillableClicks';
    /** The number of times that all components of the ad were clicked. */
    const ComponentTotalClicks = 'ComponentTotalClicks';
    /** The click-through rate of all components of the ad that were clicked. */
    const ComponentCTR = 'ComponentCTR';
}
