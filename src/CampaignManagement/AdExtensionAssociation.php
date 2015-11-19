<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that associates an ad extension and its editorial status to a supported entity, for example ad group or campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn250012(v=msads.90).aspx AdExtensionAssociation Data Object
 * 
 * @uses AdExtension
 * @uses AssociationType
 * @uses AdExtensionEditorialStatus
 * @used-by AdExtensionAssociationCollection
 */
final class AdExtensionAssociation
{
    /**
     * The ad extension associated with a supported entity.
     *
     * @var AdExtension
     */
    public $AdExtension;
    /**
     * The type of entity associated with the ad extension.
     *
     * @var AssociationType
     */
    public $AssociationType;
    /**
     * The editorial status of the ad extension.
     *
     * @var AdExtensionEditorialStatus
     */
    public $EditorialStatus;
    /**
     * The identifier of an entity associated with the ad extension.
     *
     * @var int
     */
    public $EntityId;
}
