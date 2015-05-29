<?php

namespace BingAds\Reporting;

/**
 * Defines the attributes and performance statistics columns that you can include in the CallDetailReportRequest.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn195843(v=msads.90).aspx CallDetailReportColumn Value Set
 *
 * @used-by CallDetailReportRequest
 */
final class CallDetailReportColumn
{
    /** The Name element of an Account. */
    const AccountName = 'AccountName';
    /** The Name element of a Campaign. */
    const CampaignName = 'CampaignName';
    /** The Name element of an AdGroup. */
    const AdGroupName = 'AdGroupName';
    /** The start time of the call. */
    const StartTime = 'StartTime';
    /** The end time of the call. */
    const EndTime = 'EndTime';
    /** The duration of each forwarded call that originated from a call ad extension. */
    const Duration = 'Duration';
    /** The status of the call. */
    const CallStatus = 'CallStatus';
    /** The total cost for completed calls to your tracked number. */
    const PhoneSpend = 'PhoneSpend';
    /** The name of the call type. */
    const CallTypeName = 'CallTypeName';
    /** The area code where the user was physically located when they clicked the ad. */
    const AreaCode = 'AreaCode';
    /** The city used to deliver the ad. */
    const City = 'City';
    /** The state used to deliver the ad. */
    const State = 'State';
    /** The Id element of an Account. */
    const AccountId = 'AccountId';
    /** The Id element of a Campaign. */
    const CampaignId = 'CampaignId';
    /** The Id element of an AdGroup. */
    const AdGroupId = 'AdGroupId';
}
