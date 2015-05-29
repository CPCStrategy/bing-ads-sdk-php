<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the specified media meta data from an account's media library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn766200(v=msads.90).aspx GetMediaMetaDataByIds Response Object
 *
 * @uses MediaMetaData
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::GetMediaMetaDataByIds
 */
final class GetMediaMetaDataByIdsResponse
{
    /**
     * The specified media meta data from the library.
     *
     * @var MediaMetaData[]
     */
    public $MediaMetaData;
    /**
     * An array of BatchError objects that contain details for any media meta data that were not successfully retrieved.
     *
     * @var BatchError[]
     */
    public $PartialErrors;
}
