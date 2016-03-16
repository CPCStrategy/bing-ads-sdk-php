<?php

namespace BingAds\CampaignManagement;

/**
 * Associates the specified target with the specified campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277512(v=msads.90).aspx SetTargetToCampaign Request Object
 * 
 * @used-by BingAdsCampaignManagementService::SetTargetToCampaign
 */
final class SetTargetToCampaignRequest
{
    /**
     * The identifier of the campaign to associate with the target.
     *
     * @var int
     */
    public $CampaignId;
    /**
     * The identifier of the target to associate with the campaign.
     *
     * @var int
     */
    public $TargetId;
    /**
     * If the specified CampaignId is already associated with a target, this element determines whether to replace the existing association between the campaign and target with the specified TargetId.
     *
     * @var bool
     */
    public $ReplaceAssociation;
}
