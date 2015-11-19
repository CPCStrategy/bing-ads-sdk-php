<?php

namespace BingAds\CampaignManagement;

/**
 * Removes the specified target association for the specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277500(v=msads.90).aspx DeleteTargetFromAdGroup Request Object
 * 
 * @used-by BingAdsCampaignManagementService::DeleteTargetFromAdGroup
 */
final class DeleteTargetFromAdGroupRequest
{
    /**
     * The identifier of the ad group from which to remove the target association.
     *
     * @var int
     */
    public $AdGroupId;
}
