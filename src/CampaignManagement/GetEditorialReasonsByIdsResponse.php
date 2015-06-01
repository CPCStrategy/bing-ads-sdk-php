<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the reasons why the specified entities failed editorial review and whether the rejection is appealable.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236306(v=msads.90).aspx GetEditorialReasonsByIds Response Object
 *
 * @uses EditorialReasonCollection
 * @used-by BingAdsCampaignManagementService::GetEditorialReasonsByIds
 */
final class GetEditorialReasonsByIdsResponse
{
    /**
     * A collection of ads or keywords that failed editorial review.
     *
     * @var EditorialReasonCollection[]
     */
    public $EditorialReasons;
}
