<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Defines the status of a website placement bid.
 *
 * @link http://msdn.microsoft.com/en-us/library/dd797148(v=msads.100).aspx SitePlacementStatus Value Set
 * 
 * @used-by SitePlacement
 */
final class SitePlacementStatus
{
    /** The website placement bid is active. */
    const Active = 'Active';
    /** The website placement bid is paused. */
    const Paused = 'Paused';
    /** The website placement bid is deleted. */
    const Deleted = 'Deleted';
    /** The website placement bid is inactive */
    const Inactive = 'Inactive';
}
