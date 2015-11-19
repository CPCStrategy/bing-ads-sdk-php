<?php

namespace BingAds\CampaignManagement;

/**
 * Gets associations between a campaign and a shared entity such as a negative keyword list.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743771(v=msads.100).aspx GetSharedEntityAssociationsByEntityIds Response Object
 * 
 * @uses SharedEntityAssociation
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::GetSharedEntityAssociationsByEntityIds
 */
final class GetSharedEntityAssociationsByEntityIdsResponse
{
    public $Associations;
    public $PartialErrors;
}
