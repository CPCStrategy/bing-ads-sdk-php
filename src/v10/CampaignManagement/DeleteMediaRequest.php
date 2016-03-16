<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Deletes the specified media from an account's media library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn766193(v=msads.100).aspx DeleteMedia Request Object
 * 
 * @used-by BingAdsCampaignManagementService::DeleteMedia
 */
final class DeleteMediaRequest
{
    public $AccountId;
    public $MediaIds;
}
