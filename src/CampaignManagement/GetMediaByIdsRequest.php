<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the specified media from an account's media library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277511(v=msads.90).aspx GetMediaByIds Request Object
 * 
 * @used-by BingAdsCampaignManagementService::GetMediaByIds
 */
final class GetMediaByIdsRequest
{
    /**
     * The identifier of the account that owns the media library.
     *
     * @var int
     */
    public $AccountId;
    /**
     * The identifiers of the media to get.
     *
     * @var int[]
     */
    public $MediaIds;
}
