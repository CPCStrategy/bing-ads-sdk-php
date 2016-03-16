<?php

namespace BingAds\CampaignManagement;

/**
 * Updates shared entities such as negative keyword lists within the account's library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743732(v=msads.90).aspx UpdateSharedEntities Request Object
 * 
 * @uses SharedEntity
 * @used-by BingAdsCampaignManagementService::UpdateSharedEntities
 */
final class UpdateSharedEntitiesRequest
{
    /**
     * The shared entities to update within the account's shared library, for example negative keyword lists.
     *
     * @var SharedEntity[]
     */
    public $SharedEntities;
}
