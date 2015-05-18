<?php

namespace BingAds\CampaignManagement;

/**
 * Updates the keywords within a specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236295(v=msads.90).aspx UpdateKeywords Response Object
 *
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::UpdateKeywords
 */
final class UpdateKeywordsResponse
{
    /**
     * An array of BatchError objects that contain details for any keywords that were not successfully updated.
     *
     * @var BatchError[]
     */
    public $PartialErrors;
}
