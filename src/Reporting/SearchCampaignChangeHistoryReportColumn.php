<?php

namespace BingAds\Reporting;

use DateTime;

/**
 * Defines the attribute columns that you can include in the SearchCampaignChangeHistoryReportRequest.
 *
 * @link http://msdn.microsoft.com/en-us/library/hh912353(v=msads.90).aspx SearchCampaignChangeHistoryReportColumn Value Set
 *
 * @used-by SearchCampaignChangeHistoryReportRequest
 */
final class SearchCampaignChangeHistoryReportColumn
{
    /** The date and time of the change. */
    const DATE_TIME = 'DateTime';
    /** The Id element of an Account. */
    const ACCOUNT_ID = 'AccountId';
    /** The Name element of an Account. */
    const ACCOUNT_NAME = 'AccountName';
    /** The Number element of an Account. */
    const ACCOUNT_NUMBER = 'AccountNumber';
    /** The username of the user that made the change to settings within the account. */
    const CHANGED_BY = 'ChangedBy';
    /** The Name element of a Campaign. */
    const CAMPAIGN_NAME = 'CampaignName';
    /** The Id element of a Campaign. */
    const CAMPAIGN_ID = 'CampaignId';
    /** The Name element of an AdGroup. */
    const AD_GROUP_NAME = 'AdGroupName';
    /** The Id element of an AdGroup. */
    const AD_GROUP_ID = 'AdGroupId';
    /** The Title element of a MobileAd or TextAd. */
    const AD_TITLE = 'AdTitle';
    /** The Text element of a MobileAd or TextAd. */
    const AD_DESCRIPTION = 'AdDescription';
    /** The DisplayUrl element of a MobileAd or TextAd. */
    const DISPLAY_URL = 'DisplayUrl';
    /** The Text element of a Keyword. */
    const KEYWORD = 'Keyword';
    /** The value that identifies the entity that changed. */
    const ITEM_CHANGED = 'ItemChanged';
    /** Identifies the attribute or property of the entity from the ItemChanged column that changed. */
    const ATTRIBUTE_CHANGED = 'AttributeChanged';
    /** The value that indicates whether the element was added, updated, or deleted. */
    const HOW_CHANGED = 'HowChanged';
    /** The value before the change. */
    const OLD_VALUE = 'OldValue';
    /** The value after the change. */
    const NEW_VALUE = 'NewValue';
}
