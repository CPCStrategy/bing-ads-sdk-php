<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves the ads that are associated with an ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277534(v=msads.100).aspx GetAdsByAdGroupId Request Object
 * 
 * @used-by BingAdsCampaignManagementService::GetAdsByAdGroupId
 */
final class GetAdsByAdGroupIdRequest
{
    public $AdGroupId;
}
