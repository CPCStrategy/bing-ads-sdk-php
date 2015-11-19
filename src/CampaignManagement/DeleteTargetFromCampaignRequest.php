<?php

namespace BingAds\CampaignManagement;

/**
 * Removes the target association for the specified campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277503(v=msads.100).aspx DeleteTargetFromCampaign Request Object
 * 
 * @used-by BingAdsCampaignManagementService::DeleteTargetFromCampaign
 */
final class DeleteTargetFromCampaignRequest
{
    public $CampaignId;
}
