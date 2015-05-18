<?php

namespace BingAds\CampaignManagement;

/**
 * Updates shared entities such as negative keyword lists within the account's library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743732(v=msads.90).aspx UpdateSharedEntities Response Object
 *
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::UpdateSharedEntities
 */
final class UpdateSharedEntitiesResponse
{
    /**
     * An array of BatchError objects that contain details for any shared entities that were not successfully updated.
     *
     * @var BatchError[]
     */
    public $PartialErrors;
}
