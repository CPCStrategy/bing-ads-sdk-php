<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible status values of an ad.
 *
 * @link http://msdn.microsoft.com/en-us/library/cc580692(v=msads.90).aspx AdStatus Value Set
 *
 * @used-by Ad
 */
final class AdStatus
{
    /** The ad is undergoing editorial review or has failed editorial review. */
    const INACTIVE = 'Inactive';
    /** The ad can be served. */
    const ACTIVE = 'Active';
    /** The ad will not serve until the owner resumes it. */
    const PAUSED = 'Paused';
    /** This status is for internal use only. */
    const DELETED = 'Deleted';
}
