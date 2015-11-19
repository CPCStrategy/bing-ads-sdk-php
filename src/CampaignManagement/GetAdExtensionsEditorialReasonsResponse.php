<?php

namespace BingAds\CampaignManagement;

/**
 * Gets editorial rejection reasons for the respective ad extension and entity associations.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236313(v=msads.100).aspx GetAdExtensionsEditorialReasons Response Object
 * 
 * @uses AdExtensionEditorialReasonCollection
 * @used-by BingAdsCampaignManagementService::GetAdExtensionsEditorialReasons
 */
final class GetAdExtensionsEditorialReasonsResponse
{
    public $EditorialReasons;
}
