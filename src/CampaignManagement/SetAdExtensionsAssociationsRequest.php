<?php

namespace BingAds\CampaignManagement;

/**
 * Associates the specified ad extensions with the respective campaigns or ad groups.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277532(v=msads.90).aspx SetAdExtensionsAssociations Request Object
 * 
 * @uses AdExtensionIdToEntityIdAssociation
 * @uses AssociationType
 * @used-by BingAdsCampaignManagementService::SetAdExtensionsAssociations
 */
final class SetAdExtensionsAssociationsRequest
{
    /**
     * The identifier of the account that owns the extensions.
     *
     * @var int
     */
    public $AccountId;
    /**
     * The list of ad extensions to associate with campaigns or ad groups.
     *
     * @var AdExtensionIdToEntityIdAssociation[]
     */
    public $AdExtensionIdToEntityIdAssociations;
    /**
     * The type of all entities specified in the AdExtensionIdToEntityIdAssociations list.
     *
     * @var AssociationType
     */
    public $AssociationType;
}
