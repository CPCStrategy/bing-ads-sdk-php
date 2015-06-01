<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the media associations of the specified entity type from an account's media library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn798359(v=msads.90).aspx GetMediaAssociations Response Object
 *
 * @uses MediaAssociation
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::GetMediaAssociations
 */
final class GetMediaAssociationsResponse
{
    /**
     * The specified media meta data from the library.
     *
     * @var MediaAssociation[][]
     */
    public $MediaAssociations;
    /**
     * An array of BatchError objects that contain details for any media associations that were not successfully retrieved.
     *
     * @var BatchError[]
     */
    public $PartialErrors;
}
