<?php

namespace BingAds\CampaignManagement;

/**
 * Adds a shared entity such as a negative keyword list to the account's library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743722(v=msads.90).aspx AddSharedEntity Response Object
 * 
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::AddSharedEntity
 */
final class AddSharedEntityResponse
{
    /**
     * A list of long values that represents the identifiers for the list items that were added.
     *
     * @var int[]
     */
    public $ListItemIds;
    /**
     * An array of BatchError objects that contain details for any list items that were not successfully added.
     *
     * @var BatchError[]
     */
    public $PartialErrors;
    /**
     * The identifier for the shared entity that was added.
     *
     * @var int
     */
    public $SharedEntityId;
}
