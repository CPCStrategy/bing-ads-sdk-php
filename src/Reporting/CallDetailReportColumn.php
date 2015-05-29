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
    const ACCOUNT_NAME = 'AccountName';
    /** The Name element of a Campaign. */
    const CAMPAIGN_NAME = 'CampaignName';
    /** The Name element of an AdGroup. */
    const AD_GROUP_NAME = 'AdGroupName';
    /** The start time of the call. */
    const START_TIME = 'StartTime';
    /** The end time of the call. */
    const END_TIME = 'EndTime';
    /** The duration of each forwarded call that originated from a call ad extension. */
    const DURATION = 'Duration';
    /** The status of the call. */
    const CALL_STATUS = 'CallStatus';
    /** The total cost for completed calls to your tracked number. */
    const PHONE_SPEND = 'PhoneSpend';
    /** The name of the call type. */
    const CALL_TYPE_NAME = 'CallTypeName';
    /** The area code where the user was physically located when they clicked the ad. */
    const AREA_CODE = 'AreaCode';
    /** The city used to deliver the ad. */
    const CITY = 'City';
    /** The state used to deliver the ad. */
    const STATE = 'State';
    /** The Id element of an Account. */
    const ACCOUNT_ID = 'AccountId';
    /** The Id element of a Campaign. */
    const CAMPAIGN_ID = 'CampaignId';
    /** The Id element of an AdGroup. */
    const AD_GROUP_ID = 'AdGroupId';
}
