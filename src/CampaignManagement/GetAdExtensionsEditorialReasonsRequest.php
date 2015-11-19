<?php

namespace BingAds\CampaignManagement;

/**
 * Gets editorial rejection reasons for the respective ad extension and entity associations.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236313(v=msads.100).aspx GetAdExtensionsEditorialReasons Request Object
 * 
 * @uses AdExtensionIdToEntityIdAssociation
 * @uses AssociationType
 * @used-by BingAdsCampaignManagementService::GetAdExtensionsEditorialReasons
 */
final class GetAdExtensionsEditorialReasonsRequest
{
    public $AccountId;
    public $AdExtensionIdToEntityIdAssociations;
    public $AssociationType;
}
