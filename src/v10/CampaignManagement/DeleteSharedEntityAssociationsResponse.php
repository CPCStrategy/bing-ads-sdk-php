<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Removes the association between a shared entity such as a negative keyword list and an entity such as a campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743727(v=msads.100).aspx DeleteSharedEntityAssociations Response Object
 * 
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::DeleteSharedEntityAssociations
 */
final class DeleteSharedEntityAssociationsResponse
{
    public $PartialErrors;
}
