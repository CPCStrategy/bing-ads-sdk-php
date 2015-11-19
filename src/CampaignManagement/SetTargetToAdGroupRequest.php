<?php

namespace BingAds\CampaignManagement;

/**
 * Associates the specified target with the specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277508(v=msads.100).aspx SetTargetToAdGroup Request Object
 * 
 * @used-by BingAdsCampaignManagementService::SetTargetToAdGroup
 */
final class SetTargetToAdGroupRequest
{
    public $AdGroupId;
    public $TargetId;
    public $ReplaceAssociation;
}
