<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that contains the campaign's list of negative keywords.
 *
 * @link http://msdn.microsoft.com/en-us/library/ee703967(v=msads.90).aspx CampaignNegativeKeywords Data Object
 *
 * @used-by GetNegativeKeywordsByCampaignIdsResponse
 * @used-by SetNegativeKeywordsToCampaignsRequest
 */
final class CampaignNegativeKeywords
{
    /**
     * The identifier of the campaign that the negative keywords belong to.
     *
     * @var int
     */
    public $CampaignId;
    /**
     * A list of negative keywords that prevent the service from serving an ad if the user's query contains one of the negative keywords.
     *
     * @var string[]
     */
    public $NegativeKeywords;
}
