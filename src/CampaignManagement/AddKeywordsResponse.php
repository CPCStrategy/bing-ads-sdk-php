<?php

namespace BingAds\CampaignManagement;

/**
 * Adds one or more keywords to an ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277513(v=msads.90).aspx AddKeywords Response Object
 *
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::AddKeywords
 */
final class AddKeywordsResponse
{
    /**
     * An list of long values that represents the keyword identifiers for the keywords that were added.
     *
     * @var integer[]
     */
    public $KeywordIds;
    /**
     * An array of BatchError objects that contain details for any keywords that were not successfully added.
     *
     * @var BatchError[]
     */
    public $PartialErrors;
}
