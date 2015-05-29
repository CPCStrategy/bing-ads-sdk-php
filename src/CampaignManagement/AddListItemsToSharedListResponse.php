<?php

namespace BingAds\CampaignManagement;

/**
 * Adds list items such as negative keywords to the corresponding list.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743721(v=msads.90).aspx AddListItemsToSharedList Response Object
 *
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::AddListItemsToSharedList
 */
final class AddListItemsToSharedListResponse
{
    /**
     * A list of long values that represents the identifiers for the list items that were added.
     *
     * @var integer[]
     */
    public $ListItemIds;
    /**
     * An array of BatchError objects that contain details for any list items that were not successfully added.
     *
     * @var BatchError[]
     */
    public $PartialErrors;
}
