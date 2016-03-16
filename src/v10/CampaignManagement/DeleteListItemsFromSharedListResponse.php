<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Deletes list items such as negative keywords from the corresponding list.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743723(v=msads.100).aspx DeleteListItemsFromSharedList Response Object
 * 
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::DeleteListItemsFromSharedList
 */
final class DeleteListItemsFromSharedListResponse
{
    public $PartialErrors;
}
