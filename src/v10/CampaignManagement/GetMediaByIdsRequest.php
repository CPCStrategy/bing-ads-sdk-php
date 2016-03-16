<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Gets the specified media from an account's media library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277511(v=msads.100).aspx GetMediaByIds Request Object
 * 
 * @used-by BingAdsCampaignManagementService::GetMediaByIds
 */
final class GetMediaByIdsRequest
{
    public $AccountId;
    public $MediaIds;
}
