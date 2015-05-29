<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that associates an ad extension to a supported entity, for example ad group or campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn249980(v=msads.90).aspx AdExtensionIdToEntityIdAssociation Data Object
 *
 * @used-by DeleteAdExtensionsAssociationsRequest
 * @used-by GetAdExtensionsEditorialReasonsRequest
 * @used-by SetAdExtensionsAssociationsRequest
 */
final class AdExtensionIdToEntityIdAssociation
{
    /**
     * The system-generated identifier of the ad extension.
     *
     * @var int
     */
    public $AdExtensionId;
    /**
     * The identifier of an entity associated with the ad extension.
     *
     * @var int
     */
    public $EntityId;
}
