<?php

namespace BingAds\CampaignManagement;

/**
 * Gets associations between a campaign and a shared entity such as a negative keyword list.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743773(v=msads.90).aspx GetSharedEntityAssociationsBySharedEntityIds Request Object
 * 
 * @used-by BingAdsCampaignManagementService::GetSharedEntityAssociationsBySharedEntityIds
 */
final class GetSharedEntityAssociationsBySharedEntityIdsRequest
{
    /**
     * The type of entity corresponding to the specified EntityIds element.
     *
     * @var string
     */
    public $EntityType;
    /**
     * An array of shared entity identifiers to return associations between a campaign and a shared entity such as a negative keyword list.
     *
     * @var int[]
     */
    public $SharedEntityIds;
    /**
     * The type of shared entity to get associations from the account's library.
     *
     * @var string
     */
    public $SharedEntityType;
}
