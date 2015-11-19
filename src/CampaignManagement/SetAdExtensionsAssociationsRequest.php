<?php

namespace BingAds\CampaignManagement;

/**
 * Associates the specified ad extensions with the respective campaigns or ad groups.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277532(v=msads.100).aspx SetAdExtensionsAssociations Request Object
 * 
 * @uses AdExtensionIdToEntityIdAssociation
 * @uses AssociationType
 * @used-by BingAdsCampaignManagementService::SetAdExtensionsAssociations
 */
final class SetAdExtensionsAssociationsRequest
{
    public $AccountId;
    public $AdExtensionIdToEntityIdAssociations;
    public $AssociationType;
}
