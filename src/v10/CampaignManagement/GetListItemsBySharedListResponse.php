<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Gets the list items such as the negative keywords of a negative keyword list.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743729(v=msads.100).aspx GetListItemsBySharedList Response Object
 * 
 * @uses SharedListItem
 * @used-by BingAdsCampaignManagementService::GetListItemsBySharedList
 */
final class GetListItemsBySharedListResponse
{
    public $ListItems;
}
