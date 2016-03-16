<?php

namespace BingAds\CampaignManagement;

/**
 * Adds one or more ad extensions to an account's ad extension library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236319(v=msads.90).aspx AddAdExtensions Request Object
 * 
 * @uses AdExtension
 * @used-by BingAdsCampaignManagementService::AddAdExtensions
 */
final class AddAdExtensionsRequest
{
    /**
     * The identifier of the account to add the extensions to.
     *
     * @var int
     */
    public $AccountId;
    /**
     * The list of ad extensions of any type to add to the account.
     *
     * @var AdExtension[]
     */
    public $AdExtensions;
}
