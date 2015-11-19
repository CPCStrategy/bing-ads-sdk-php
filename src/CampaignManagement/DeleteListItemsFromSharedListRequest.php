<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes list items such as negative keywords from the corresponding list.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743723(v=msads.100).aspx DeleteListItemsFromSharedList Request Object
 * 
 * @uses SharedList
 * @used-by BingAdsCampaignManagementService::DeleteListItemsFromSharedList
 */
final class DeleteListItemsFromSharedListRequest
{
    public $ListItemIds;
    public $SharedList;
}
