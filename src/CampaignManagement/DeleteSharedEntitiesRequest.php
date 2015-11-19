<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes shared entities such as negative keyword lists from the account's library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743726(v=msads.100).aspx DeleteSharedEntities Request Object
 * 
 * @uses SharedEntity
 * @used-by BingAdsCampaignManagementService::DeleteSharedEntities
 */
final class DeleteSharedEntitiesRequest
{
    public $SharedEntities;
}
