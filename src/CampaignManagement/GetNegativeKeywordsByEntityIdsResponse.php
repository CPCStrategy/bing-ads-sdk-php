<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the negative keywords that are only associated with the specified campaigns or ad groups.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743730(v=msads.90).aspx GetNegativeKeywordsByEntityIds Response Object
 *
 * @uses EntityNegativeKeyword
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::GetNegativeKeywordsByEntityIds
 */
final class GetNegativeKeywordsByEntityIdsResponse
{
    /**
     * An array of negative keyword with associated entity such as a campaign or ad group.
     *
     * @var EntityNegativeKeyword[]
     */
    public $EntityNegativeKeywords;
    /**
     * An array of BatchError objects that contain details for any negative keywords that were not successfully returned from the corresponding entity.
     *
     * @var BatchError[]
     */
    public $PartialErrors;
}
