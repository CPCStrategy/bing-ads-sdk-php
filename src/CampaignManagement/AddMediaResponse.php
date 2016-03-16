<?php

namespace BingAds\CampaignManagement;

/**
 * Adds the specified media to an account's media library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277518(v=msads.90).aspx AddMedia Response Object
 * 
 * @used-by BingAdsCampaignManagementService::AddMedia
 */
final class AddMediaResponse
{
    /**
     * The identifiers of the media that you added to the library.
     *
     * @var int[]
     */
    public $MediaIds;
}
