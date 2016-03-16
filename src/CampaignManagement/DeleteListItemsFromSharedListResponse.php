<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes list items such as negative keywords from the corresponding list.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743723(v=msads.90).aspx DeleteListItemsFromSharedList Response Object
 * 
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::DeleteListItemsFromSharedList
 */
final class DeleteListItemsFromSharedListResponse
{
    /**
     * An array of BatchError objects that contain details for any list items that were not successfully deleted.
     *
     * @var BatchError[]
     */
    public $PartialErrors;
}
