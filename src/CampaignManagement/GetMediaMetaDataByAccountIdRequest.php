<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the media meta data of the specified entity type from an account's media library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn766196(v=msads.100).aspx GetMediaMetaDataByAccountId Request Object
 * 
 * @uses MediaEnabledEntityFilter
 * @used-by BingAdsCampaignManagementService::GetMediaMetaDataByAccountId
 */
final class GetMediaMetaDataByAccountIdRequest
{
    public $MediaEnabledEntities;
}
