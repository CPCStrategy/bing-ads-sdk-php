<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the respective ad extension associations by the specified campaign and ad group identifiers.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236309(v=msads.90).aspx GetAdExtensionsAssociations Request Object
 * 
 * @uses AdExtensionsTypeFilter
 * @uses AssociationType
 * @used-by BingAdsCampaignManagementService::GetAdExtensionsAssociations
 */
final class GetAdExtensionsAssociationsRequest
{
    /**
     * The identifier of the account that owns the extensions.
     *
     * @var int
     */
    public $AccountId;
    /**
     * Filters the returned associations by ad extension type.
     *
     * @var AdExtensionsTypeFilter
     */
    public $AdExtensionType;
    /**
     * Filters the returned associations by entity type.
     *
     * @var AssociationType
     */
    public $AssociationType;
    /**
     * The list of entity identifiers by which you may request the respective ad extension associations.
     *
     * @var int[]
     */
    public $EntityIds;
}
