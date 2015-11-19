<?php

namespace BingAds\CampaignManagement;

/**
 * Adds a shared entity such as a negative keyword list to the account's library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743722(v=msads.100).aspx AddSharedEntity Request Object
 * 
 * @uses SharedEntity
 * @uses SharedListItem
 * @used-by BingAdsCampaignManagementService::AddSharedEntity
 */
final class AddSharedEntityRequest
{
    public $SharedEntity;
    public $ListItems;
}
