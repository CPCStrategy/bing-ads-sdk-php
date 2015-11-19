<?php

namespace BingAds\CampaignManagement;

/**
 * Adds one or more ad extensions to an account's ad extension library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236319(v=msads.100).aspx AddAdExtensions Request Object
 * 
 * @uses AdExtension
 * @used-by BingAdsCampaignManagementService::AddAdExtensions
 */
final class AddAdExtensionsRequest
{
    public $AccountId;
    public $AdExtensions;
}
