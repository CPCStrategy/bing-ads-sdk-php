<?php

namespace BingAds\CampaignManagement;

/**
 * Associates the specified target with the specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277508(v=msads.90).aspx SetTargetToAdGroup Request Object
 * 
 * @used-by BingAdsCampaignManagementService::SetTargetToAdGroup
 */
final class SetTargetToAdGroupRequest
{
    /**
     * The identifier of the ad group to associate with the target.
     *
     * @var int
     */
    public $AdGroupId;
    /**
     * The identifier of the target to associate with the ad group.
     *
     * @var int
     */
    public $TargetId;
    /**
     * If the specified AdGroupId is already associated with a target, this element determines whether to replace the existing association between the ad group and target with the specified TargetId.
     *
     * @var bool
     */
    public $ReplaceAssociation;
}
