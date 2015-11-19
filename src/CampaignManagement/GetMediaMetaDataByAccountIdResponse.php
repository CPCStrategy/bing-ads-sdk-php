<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the media meta data of the specified entity type from an account's media library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn766196(v=msads.90).aspx GetMediaMetaDataByAccountId Response Object
 * 
 * @uses MediaMetaData
 * @used-by BingAdsCampaignManagementService::GetMediaMetaDataByAccountId
 */
final class GetMediaMetaDataByAccountIdResponse
{
    /**
     * The specified media meta data from the library.
     *
     * @var MediaMetaData[]
     */
    public $MediaMetaData;
}
