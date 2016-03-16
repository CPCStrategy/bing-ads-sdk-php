<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Gets associations between a campaign and a shared entity such as a negative keyword list.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743771(v=msads.100).aspx GetSharedEntityAssociationsByEntityIds Request Object
 * 
 * @used-by BingAdsCampaignManagementService::GetSharedEntityAssociationsByEntityIds
 */
final class GetSharedEntityAssociationsByEntityIdsRequest
{
    public $EntityIds;
    public $EntityType;
    public $SharedEntityType;
}
