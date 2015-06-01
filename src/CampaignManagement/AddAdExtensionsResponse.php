<?php

namespace BingAds\CampaignManagement;

/**
 * Adds one or more ad extensions to an account's ad extension library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236319(v=msads.90).aspx AddAdExtensions Response Object
 *
 * @uses AdExtensionIdentity
 * @used-by BingAdsCampaignManagementService::AddAdExtensions
 */
final class AddAdExtensionsResponse
{
    /**
     * The identities of the extensions that were added.
     *
     * @var AdExtensionIdentity[]
     */
    public $AdExtensionIdentities;
}
