<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes the specified media from an account's media library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn766193(v=msads.100).aspx DeleteMedia Response Object
 * 
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::DeleteMedia
 */
final class DeleteMediaResponse
{
    public $PartialErrors;
}
