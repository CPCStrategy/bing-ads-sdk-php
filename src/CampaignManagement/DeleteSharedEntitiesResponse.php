<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes shared entities such as negative keyword lists from the account's library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743726(v=msads.90).aspx DeleteSharedEntities Response Object
 *
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::DeleteSharedEntities
 */
final class DeleteSharedEntitiesResponse
{
    /**
     * An array of BatchError objects that contain details for any shared entities that were not successfully deleted.
     *
     * @var BatchError[]
     */
    public $PartialErrors;
}
