<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the base class of an ad group criterion.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj738614(v=msads.90).aspx AdGroupCriterion Data Object
 *
 * @uses Criterion
 * @uses AdGroupCriterionStatus
 * @used-by AdGroupCriterionAction
 * @used-by AddAdGroupCriterionsRequest
 * @used-by GetAdGroupCriterionsByAdGroupIdResponse
 * @used-by GetAdGroupCriterionsByIdsResponse
 * @used-by UpdateAdGroupCriterionsRequest
 */
class AdGroupCriterion
{
    /**
     * The identifier of the ad group to apply the criterion to.
     *
     * @var int
     */
    public $AdGroupId;
    /**
     * The criterion to apply to the ad group.
     *
     * @var Criterion
     */
    public $Criterion;
    /**
     * The system-generated identifier that identifies this ad group criterion.
     *
     * @var int
     */
    public $Id;
    /**
     * A status value that determines whether to apply the criterion to the ad group.
     *
     * @var AdGroupCriterionStatus
     */
    public $Status;
    /**
     * The type of ad group criterion.
     *
     * @var string
     */
    public $Type;
}
