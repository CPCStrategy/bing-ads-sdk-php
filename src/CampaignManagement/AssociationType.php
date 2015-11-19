<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the entity type or types associated with an ad extension.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn249973(v=msads.90).aspx AssociationType Value Set
 * 
 * @used-by AdExtensionAssociation
 * @used-by DeleteAdExtensionsAssociationsRequest
 * @used-by GetAdExtensionIdsByAccountIdRequest
 * @used-by GetAdExtensionsAssociationsRequest
 * @used-by GetAdExtensionsEditorialReasonsRequest
 * @used-by SetAdExtensionsAssociationsRequest
 */
final class AssociationType
{
    /** Specifies ad extension associations with campaigns. */
    const Campaign = 'Campaign';
    /** Specifies ad extension associations with ad groups. */
    const AdGroup = 'AdGroup';
}
