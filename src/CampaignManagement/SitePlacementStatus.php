<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the status of a website placement bid.
 *
 * @link http://msdn.microsoft.com/en-us/library/dd797148(v=msads.90).aspx SitePlacementStatus Value Set
 *
 * @used-by SitePlacement
 */
final class SitePlacementStatus
{
    /** The website placement bid is active. */
    const ACTIVE = 'Active';
    /** The website placement bid is paused. */
    const PAUSED = 'Paused';
    /** The website placement bid is deleted. */
    const DELETED = 'Deleted';
    /** The website placement bid is inactive */
    const INACTIVE = 'Inactive';
}
