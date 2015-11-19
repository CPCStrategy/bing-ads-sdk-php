<?php

namespace BingAds\CampaignManagement;

/**
 * Associates the specified ad extensions with the respective campaigns or ad groups.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277532(v=msads.100).aspx SetAdExtensionsAssociations Response Object
 * 
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::SetAdExtensionsAssociations
 */
final class SetAdExtensionsAssociationsResponse
{
    public $PartialErrors;
}
