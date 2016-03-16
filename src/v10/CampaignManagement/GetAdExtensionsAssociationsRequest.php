<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Gets the respective ad extension associations by the specified campaign and ad group identifiers.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236309(v=msads.100).aspx GetAdExtensionsAssociations Request Object
 * 
 * @uses AdExtensionsTypeFilter
 * @uses AssociationType
 * @used-by BingAdsCampaignManagementService::GetAdExtensionsAssociations
 */
final class GetAdExtensionsAssociationsRequest
{
    public $AccountId;
    public $AdExtensionType;
    public $AssociationType;
    public $EntityIds;
}
