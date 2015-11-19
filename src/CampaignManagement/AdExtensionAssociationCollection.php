<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an array of objects that associate an ad extension and its editorial status to a supported entity, for example ad group or campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn250010(v=msads.90).aspx AdExtensionAssociationCollection Data Object
 * 
 * @uses AdExtensionAssociation
 * @used-by GetAdExtensionsAssociationsResponse
 */
final class AdExtensionAssociationCollection
{
    /**
     * An array of objects that associate an ad extension and its editorial status to a supported entity, for example ad group or campaign.
     *
     * @var AdExtensionAssociation[]
     */
    public $AdExtensionAssociations;
}
