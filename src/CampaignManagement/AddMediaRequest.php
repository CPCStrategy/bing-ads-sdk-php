<?php

namespace BingAds\CampaignManagement;

/**
 * Adds the specified media to an account's media library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277518(v=msads.100).aspx AddMedia Request Object
 * 
 * @uses Media
 * @used-by BingAdsCampaignManagementService::AddMedia
 */
final class AddMediaRequest
{
    public $AccountId;
    public $Media;
}
