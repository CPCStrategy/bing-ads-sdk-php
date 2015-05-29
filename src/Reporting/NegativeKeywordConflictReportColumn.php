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
    const ACCOUNT_NAME = 'AccountName';
    /** The Number element of an Account. */
    const ACCOUNT_NUMBER = 'AccountNumber';
    /** The Id element of an Account. */
    const ACCOUNT_ID = 'AccountId';
    /** The Name element of a Campaign. */
    const CAMPAIGN_NAME = 'CampaignName';
    /** The Id element of a Campaign. */
    const CAMPAIGN_ID = 'CampaignId';
    /** The Name element of an AdGroup. */
    const AD_GROUP_NAME = 'AdGroupName';
    /** The Id element of an AdGroup. */
    const AD_GROUP_ID = 'AdGroupId';
    /** The Text element of a Keyword. */
    const KEYWORD = 'Keyword';
    /** The Id element of a Keyword. */
    const KEYWORD_ID = 'KeywordId';
    /** The negative keyword that conflicts with the keyword at the ad group or campaign level. */
    const NEGATIVE_KEYWORD = 'NegativeKeyword';
    /** The entity level where the keyword and negative keyword conflict occurs. */
    const CONFLICT_LEVEL = 'ConflictLevel';
}
