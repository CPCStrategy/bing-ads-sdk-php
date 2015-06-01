<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes shared entities such as negative keyword lists from the account's library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743726(v=msads.90).aspx DeleteSharedEntities Request Object
 *
 * @uses SharedEntity
 * @used-by BingAdsCampaignManagementService::DeleteSharedEntities
 */
final class DeleteSharedEntitiesRequest
{
    /**
     * The shared entities to delete from the account's shared library, for example negative keyword lists.
     *
     * @var SharedEntity[]
     */
    public $SharedEntities;
}
