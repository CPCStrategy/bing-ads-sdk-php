<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that contains the ad group's list of negative keywords.
 *
 * @link http://msdn.microsoft.com/en-us/library/ee703992(v=msads.90).aspx AdGroupNegativeKeywords Data Object
 *
 * @used-by GetNegativeKeywordsByAdGroupIdsResponse
 * @used-by SetNegativeKeywordsToAdGroupsRequest
 */
final class AdGroupNegativeKeywords
{
    /**
     * The identifier of the ad group that the negative keywords belong to.
     *
     * @var int
     */
    public $AdGroupId;
    /**
     * A list of negative keywords that prevents the service from serving an ad if the user's search query contains one of the negative keywords.
     *
     * @var string[]
     */
    public $NegativeKeywords;
}
