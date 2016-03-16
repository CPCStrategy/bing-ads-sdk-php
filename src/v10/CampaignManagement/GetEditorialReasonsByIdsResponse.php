<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Gets the reasons why the specified entities failed editorial review and whether the rejection is appealable.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236306(v=msads.100).aspx GetEditorialReasonsByIds Response Object
 * 
 * @uses EditorialReasonCollection
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::GetEditorialReasonsByIds
 */
final class GetEditorialReasonsByIdsResponse
{
    public $EditorialReasons;
    public $PartialErrors;
}
