<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the shared entities such as negative keyword lists from the account's library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743728(v=msads.100).aspx GetSharedEntitiesByAccountId Response Object
 * 
 * @uses SharedEntity
 * @used-by BingAdsCampaignManagementService::GetSharedEntitiesByAccountId
 */
final class GetSharedEntitiesByAccountIdResponse
{
    public $SharedEntities;
}
