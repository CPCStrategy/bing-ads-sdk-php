<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the reasons why the specified entities failed editorial review and whether the rejection is appealable.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236306(v=msads.100).aspx GetEditorialReasonsByIds Request Object
 * 
 * @uses EntityIdToParentIdAssociation
 * @uses EntityType
 * @used-by BingAdsCampaignManagementService::GetEditorialReasonsByIds
 */
final class GetEditorialReasonsByIdsRequest
{
    public $AccountId;
    public $EntityIdToParentIdAssociations;
    public $EntityType;
}
