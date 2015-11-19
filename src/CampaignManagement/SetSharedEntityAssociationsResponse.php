<?php

namespace BingAds\CampaignManagement;

/**
 * Sets the association between a campaign and a shared entity such as a negative keyword list.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743780(v=msads.100).aspx SetSharedEntityAssociations Response Object
 * 
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::SetSharedEntityAssociations
 */
final class SetSharedEntityAssociationsResponse
{
    public $PartialErrors;
}
