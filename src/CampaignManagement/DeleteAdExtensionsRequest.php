<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes one or more ad extensions from the account's ad extension library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277537(v=msads.90).aspx DeleteAdExtensions Request Object
 *
 * @used-by BingAdsCampaignManagementService::DeleteAdExtensions
 */
final class DeleteAdExtensionsRequest
{
    /**
     * The identifier of the account that owns the extensions.
     *
     * @var int
     */
    public $AccountId;
    /**
     * The identifiers of the extensions to delete.
     *
     * @var integer[]
     */
    public $AdExtensionIds;
}
