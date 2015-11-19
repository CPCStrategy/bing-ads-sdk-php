<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible status values of an ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671715(v=msads.90).aspx AdGroupStatus Value Set
 * 
 * @used-by AdGroup
 */
final class AdGroupStatus
{
    /** The ad group is new. */
    const Draft = 'Draft';
    /** The ad group is active, which indicates that the ad group's ads can be served. */
    const Active = 'Active';
    /** The ad group is paused, which indicates that the ad group's ads will not serve. */
    const Paused = 'Paused';
    /** The ad group expired. */
    const Deleted = 'Deleted';
}
