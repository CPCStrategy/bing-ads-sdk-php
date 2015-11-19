<?php

namespace BingAds\CampaignManagement;

/**
 * Adds a shared entity such as a negative keyword list to the account's library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743722(v=msads.90).aspx AddSharedEntity Request Object
 *
 * @uses SharedEntity
 * @uses SharedListItem
 * @used-by BingAdsCampaignManagementService::AddSharedEntity
 */
final class AddSharedEntityRequest
{
    /**
     * The shared entity to add to the account's shared library, for example a negative keyword list.
     *
     * @var SharedEntity
     */
    public $SharedEntity;
    /**
     * An array of list items to add to the shared list, for example a list of negative keywords.
     *
     * @var SharedListItem[]
     */
    public $ListItems;
}
