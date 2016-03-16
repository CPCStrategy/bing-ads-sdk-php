<?php

namespace BingAds\CampaignManagement;

/**
 * Updates the keywords within a specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236295(v=msads.90).aspx UpdateKeywords Request Object
 * 
 * @uses Keyword
 * @used-by BingAdsCampaignManagementService::UpdateKeywords
 */
final class UpdateKeywordsRequest
{
    /**
     * The identifier of the ad group whose keywords will be updated.
     *
     * @var int
     */
    public $AdGroupId;
    /**
     * An array of Keyword objects that contains the updated keyword information.
     *
     * @var Keyword[]
     */
    public $Keywords;
}
