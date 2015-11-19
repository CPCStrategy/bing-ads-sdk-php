<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the list items such as the negative keywords of a negative keyword list.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743729(v=msads.100).aspx GetListItemsBySharedList Request Object
 * 
 * @uses SharedList
 * @used-by BingAdsCampaignManagementService::GetListItemsBySharedList
 */
final class GetListItemsBySharedListRequest
{
    public $SharedList;
}
