<?php

namespace BingAds\Reporting;

/**
 * Defines the attributes columns that you can include in the NegativeKeywordConflictReportRequest.
 *
 * @link http://msdn.microsoft.com/en-us/library/hh560535(v=msads.90).aspx NegativeKeywordConflictReportColumn Value Set
 *
 * @used-by NegativeKeywordConflictReportRequest
 */
final class NegativeKeywordConflictReportColumn
{
    /** The Name element of an Account. */
    const AccountName = 'AccountName';
    /** The Number element of an Account. */
    const AccountNumber = 'AccountNumber';
    /** The Id element of an Account. */
    const AccountId = 'AccountId';
    /** The Name element of a Campaign. */
    const CampaignName = 'CampaignName';
    /** The Id element of a Campaign. */
    const CampaignId = 'CampaignId';
    /** The Name element of an AdGroup. */
    const AdGroupName = 'AdGroupName';
    /** The Id element of an AdGroup. */
    const AdGroupId = 'AdGroupId';
    /** The Text element of a Keyword. */
    const Keyword = 'Keyword';
    /** The Id element of a Keyword. */
    const KeywordId = 'KeywordId';
    /** The negative keyword that conflicts with the keyword at the ad group or campaign level. */
    const NegativeKeyword = 'NegativeKeyword';
    /** The entity level where the keyword and negative keyword conflict occurs. */
    const ConflictLevel = 'ConflictLevel';
}
