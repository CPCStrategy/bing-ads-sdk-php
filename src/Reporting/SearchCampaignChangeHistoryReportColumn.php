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
    const DateTime = 'DateTime';
    /** The Id element of an Account. */
    const AccountId = 'AccountId';
    /** The Name element of an Account. */
    const AccountName = 'AccountName';
    /** The Number element of an Account. */
    const AccountNumber = 'AccountNumber';
    /** The username of the user that made the change to settings within the account. */
    const ChangedBy = 'ChangedBy';
    /** The Name element of a Campaign. */
    const CampaignName = 'CampaignName';
    /** The Id element of a Campaign. */
    const CampaignId = 'CampaignId';
    /** The Name element of an AdGroup. */
    const AdGroupName = 'AdGroupName';
    /** The Id element of an AdGroup. */
    const AdGroupId = 'AdGroupId';
    /** The Title element of a MobileAd or TextAd. */
    const AdTitle = 'AdTitle';
    /** The Text element of a MobileAd or TextAd. */
    const AdDescription = 'AdDescription';
    /** The DisplayUrl element of a MobileAd or TextAd. */
    const DisplayUrl = 'DisplayUrl';
    /** The Text element of a Keyword. */
    const Keyword = 'Keyword';
    /** The value that identifies the entity that changed. */
    const ItemChanged = 'ItemChanged';
    /** Identifies the attribute or property of the entity from the ItemChanged column that changed. */
    const AttributeChanged = 'AttributeChanged';
    /** The value that indicates whether the element was added, updated, or deleted. */
    const HowChanged = 'HowChanged';
    /** The value before the change. */
    const OldValue = 'OldValue';
    /** The value after the change. */
    const NewValue = 'NewValue';
}
