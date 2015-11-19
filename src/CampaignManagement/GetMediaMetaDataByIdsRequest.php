<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the specified media meta data from an account's media library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn766200(v=msads.100).aspx GetMediaMetaDataByIds Request Object
 * 
 * @used-by BingAdsCampaignManagementService::GetMediaMetaDataByIds
 */
final class GetMediaMetaDataByIdsRequest
{
    public $MediaIds;
}
