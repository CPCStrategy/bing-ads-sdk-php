<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Updates one or more ad extensions within an account's ad extension library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277522(v=msads.100).aspx UpdateAdExtensions Request Object
 * 
 * @uses AdExtension
 * @used-by BingAdsCampaignManagementService::UpdateAdExtensions
 */
final class UpdateAdExtensionsRequest
{
    public $AccountId;
    public $AdExtensions;
}
