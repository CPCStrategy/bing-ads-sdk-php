<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes the specified media from an account's media library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn766193(v=msads.90).aspx DeleteMedia Request Object
 * 
 * @used-by BingAdsCampaignManagementService::DeleteMedia
 */
final class DeleteMediaRequest
{
    /**
     * The identifier of the account that owns the media library.
     *
     * @var int
     */
    public $AccountId;
    /**
     * A maximum of 100 media identifiers to delete from the account's media library.
     *
     * @var int[]
     */
    public $MediaIds;
}
