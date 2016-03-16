<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Gets the media associations of the specified entity type from an account's media library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn798359(v=msads.100).aspx GetMediaAssociations Request Object
 * 
 * @uses MediaEnabledEntityFilter
 * @used-by BingAdsCampaignManagementService::GetMediaAssociations
 */
final class GetMediaAssociationsRequest
{
    public $MediaEnabledEntities;
    public $MediaIds;
}
