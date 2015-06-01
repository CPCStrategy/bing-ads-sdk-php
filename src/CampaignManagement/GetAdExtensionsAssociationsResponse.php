<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the respective ad extension associations by the specified campaign and ad group identifiers.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236309(v=msads.90).aspx GetAdExtensionsAssociations Response Object
 *
 * @uses AdExtensionAssociationCollection
 * @used-by BingAdsCampaignManagementService::GetAdExtensionsAssociations
 */
final class GetAdExtensionsAssociationsResponse
{
    /**
     * An array of ad extension association collections.
     *
     * @var AdExtensionAssociationCollection[]
     */
    public $AdExtensionAssociationCollection;
}
