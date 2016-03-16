<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Gets associations between a campaign and a shared entity such as a negative keyword list.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743773(v=msads.100).aspx GetSharedEntityAssociationsBySharedEntityIds Request Object
 * 
 * @used-by BingAdsCampaignManagementService::GetSharedEntityAssociationsBySharedEntityIds
 */
final class GetSharedEntityAssociationsBySharedEntityIdsRequest
{
    public $EntityType;
    public $SharedEntityIds;
    public $SharedEntityType;
}
