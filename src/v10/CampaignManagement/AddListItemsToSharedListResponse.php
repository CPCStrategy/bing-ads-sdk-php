<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Adds list items such as negative keywords to the corresponding list.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743721(v=msads.100).aspx AddListItemsToSharedList Response Object
 * 
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::AddListItemsToSharedList
 */
final class AddListItemsToSharedListResponse
{
    public $ListItemIds;
    public $PartialErrors;
}
