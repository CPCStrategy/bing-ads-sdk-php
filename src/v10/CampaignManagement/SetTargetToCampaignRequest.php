<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Associates the specified target with the specified campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277512(v=msads.100).aspx SetTargetToCampaign Request Object
 * 
 * @used-by BingAdsCampaignManagementService::SetTargetToCampaign
 */
final class SetTargetToCampaignRequest
{
    public $CampaignId;
    public $TargetId;
    public $ReplaceAssociation;
}
