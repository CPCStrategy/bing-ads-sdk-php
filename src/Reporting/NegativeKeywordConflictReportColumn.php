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
    /** The account name. */
    const AccountName = 'AccountName';
    /** The Bing Ads assigned number of an account. */
    const AccountNumber = 'AccountNumber';
    /** The Bing Ads assigned identifier of an account. */
    const AccountId = 'AccountId';
    /** The campaign name. */
    const CampaignName = 'CampaignName';
    /** The Bing Ads assigned identifier of a campaign. */
    const CampaignId = 'CampaignId';
    /** The ad group name. */
    const AdGroupName = 'AdGroupName';
    /** The Bing Ads assigned identifier of an ad group. */
    const AdGroupId = 'AdGroupId';
    /** The keyword text. */
    const Keyword = 'Keyword';
    /** The Bing Ads assigned identifier of a keyword. */
    const KeywordId = 'KeywordId';
    /** The negative keyword that conflicts with the keyword at the ad group or campaign level. */
    const NegativeKeyword = 'NegativeKeyword';
    /** The entity level where the keyword and negative keyword conflict occurs. */
    const ConflictLevel = 'ConflictLevel';
    /** The keyword bid match type. */
    const BidMatchType = 'BidMatchType';
    /** The NegativeKeywordListId element of the NegativeKeywordList Data Object. */
    const NegativeKeywordListId = 'NegativeKeywordListId';
    /** The Name element of a NegativeKeywordList. */
    const NegativeKeywordList = 'NegativeKeywordList';
    /** The Id element of a NegativeKeyword. */
    const NegativeKeywordId = 'NegativeKeywordId';
    /** The type of match to compare the negative keyword and the user's search term. */
    const NegativeKeywordMatchType = 'NegativeKeywordMatchType';
}
