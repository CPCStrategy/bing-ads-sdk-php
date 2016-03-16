<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the editorial review status values of a keyword.
 *
 * @link http://msdn.microsoft.com/en-us/library/cc565085(v=msads.90).aspx KeywordEditorialStatus Value Set
 * 
 * @used-by Keyword
 * @used-by GetKeywordsByEditorialStatusRequest
 */
final class KeywordEditorialStatus
{
    /** The keyword passed editorial review. */
    const Active = 'Active';
    /** The keyword failed editorial review. */
    const Disapproved = 'Disapproved';
    /** One or more elements of the keyword is undergoing editorial review. */
    const Inactive = 'Inactive';
    /** The keyword passed editorial review in one or more markets, and one or more elements of the keyword is undergoing editorial review in another market. */
    const ActiveLimited = 'ActiveLimited';
}
