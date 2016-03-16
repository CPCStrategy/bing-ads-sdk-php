<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes list items such as negative keywords from the corresponding list.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743723(v=msads.90).aspx DeleteListItemsFromSharedList Request Object
 * 
 * @uses SharedList
 * @used-by BingAdsCampaignManagementService::DeleteListItemsFromSharedList
 */
final class DeleteListItemsFromSharedListRequest
{
    /**
     * An array of identifiers of the list items to delete from the shared list, for example a list of negative keyword identifiers.
     *
     * @var int[]
     */
    public $ListItemIds;
    /**
     * The list within the account's shared library, from which to delete the specified list items.
     *
     * @var SharedList
     */
    public $SharedList;
}
