<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Gets the respective ad extension associations by the specified campaign and ad group identifiers.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236309(v=msads.100).aspx GetAdExtensionsAssociations Response Object
 * 
 * @uses AdExtensionAssociationCollection
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::GetAdExtensionsAssociations
 */
final class GetAdExtensionsAssociationsResponse
{
    public $AdExtensionAssociationCollection;
    public $PartialErrors;
}
