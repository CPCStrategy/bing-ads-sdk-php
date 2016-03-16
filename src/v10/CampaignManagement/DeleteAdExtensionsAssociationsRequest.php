<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Removes the specified association from the respective campaigns or ad groups.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236305(v=msads.100).aspx DeleteAdExtensionsAssociations Request Object
 * 
 * @uses AdExtensionIdToEntityIdAssociation
 * @uses AssociationType
 * @used-by BingAdsCampaignManagementService::DeleteAdExtensionsAssociations
 */
final class DeleteAdExtensionsAssociationsRequest
{
    public $AccountId;
    public $AdExtensionIdToEntityIdAssociations;
    public $AssociationType;
}
