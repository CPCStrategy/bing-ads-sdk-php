<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Defines the action to apply to a BiddableAdGroupCriterion or NegativeAdGroupCriterion, specifically one that contains a ProductPartition.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913128(v=msads.100).aspx AdGroupCriterionAction Data Object
 * 
 * @uses ItemAction
 * @uses AdGroupCriterion
 * @used-by ApplyProductPartitionActionsRequest
 */
final class AdGroupCriterionAction
{
    /**
     * The action to be applied for the AdGroupCriterion.
     *
     * @var ItemAction
     */
    public $Action;
    /**
     * The ad group criterion of either type BiddableAdGroupCriterion or NegativeAdGroupCriterion, which contains a ProductPartition and FixedBid.
     *
     * @var AdGroupCriterion
     */
    public $AdGroupCriterion;
}
