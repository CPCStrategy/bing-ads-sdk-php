<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes shared entities such as negative keyword lists from the account's library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743726(v=msads.100).aspx DeleteSharedEntities Response Object
 * 
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::DeleteSharedEntities
 */
final class DeleteSharedEntitiesResponse
{
    public $PartialErrors;
}
