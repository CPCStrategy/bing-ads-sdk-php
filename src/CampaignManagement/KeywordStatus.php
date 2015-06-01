<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible status values of a keyword.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671482(v=msads.90).aspx KeywordStatus Value Set
 *
 * @used-by Keyword
 */
final class KeywordStatus
{
    /** The keyword can be used to match user search queries. */
    const Active = 'Active';
    /** The keyword cannot be used to match user search queries until the owner resumes it. */
    const Paused = 'Paused';
    /** This status is for internal use only. */
    const Deleted = 'Deleted';
    /** The keyword is undergoing editorial review or has failed editorial review. */
    const Inactive = 'Inactive';
}
