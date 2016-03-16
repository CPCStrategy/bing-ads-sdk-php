<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the base class of a campaign criterion.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913126(v=msads.90).aspx CampaignCriterion Data Object
 * 
 * @uses Criterion
 * @uses KeyValuePairOfstringstring
 * @used-by AddCampaignCriterionsRequest
 * @used-by GetCampaignCriterionsByCampaignIdResponse
 * @used-by GetCampaignCriterionsByIdsResponse
 * @used-by UpdateCampaignCriterionsRequest
 */
class CampaignCriterion
{
    /**
     * Reserved for future use.
     *
     * @var int
     */
    public $BidAdjustment;
    /**
     * The identifier of the campaign to apply the criterion to.
     *
     * @var int
     */
    public $CampaignId;
    /**
     * The criterion to apply to the campaign.
     *
     * @var Criterion
     */
    public $Criterion;
    /**
     * The list of key and value strings for forward compatibility.
     *
     * @var KeyValuePairOfstringstring[]
     */
    public $ForwardCompatibilityMap;
    /**
     * The system-generated identifier that identifies this campaign criterion.
     *
     * @var int
     */
    public $Id;
    /**
     * The type of campaign criterion.
     *
     * @var string
     */
    public $Type;
}
