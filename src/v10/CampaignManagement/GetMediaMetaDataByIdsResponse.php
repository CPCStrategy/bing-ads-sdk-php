<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Gets the specified media meta data from an account's media library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn766200(v=msads.100).aspx GetMediaMetaDataByIds Response Object
 * 
 * @uses MediaMetaData
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::GetMediaMetaDataByIds
 */
final class GetMediaMetaDataByIdsResponse
{
    public $MediaMetaData;
    public $PartialErrors;
}
