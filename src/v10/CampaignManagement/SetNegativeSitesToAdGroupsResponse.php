<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Sets the negative site URLs of the specified ad groups.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236317(v=msads.100).aspx SetNegativeSitesToAdGroups Response Object
 * 
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::SetNegativeSitesToAdGroups
 */
final class SetNegativeSitesToAdGroupsResponse
{
    public $PartialErrors;
}
