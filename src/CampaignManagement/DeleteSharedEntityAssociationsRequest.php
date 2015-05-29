<?php

namespace BingAds\CampaignManagement;

/**
 * Removes the association between a shared entity such as a negative keyword list and an entity such as a campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743727(v=msads.90).aspx DeleteSharedEntityAssociations Request Object
 *
 * @uses SharedEntityAssociation
 * @used-by BingAdsCampaignManagementService::DeleteSharedEntityAssociations
 */
final class DeleteSharedEntityAssociationsRequest
{
    /**
     * An array of objects that associate a shared entity such as a negative keyword list and an entity such as a campaign.
     *
     * @var SharedEntityAssociation[]
     */
    public $Associations;
}
