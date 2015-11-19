<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an ad group level product partition with one condition that helps determine whether a product from the Bing Merchant Center store gets served as a product ad.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913123(v=msads.90).aspx ProductPartition Data Object
 * 
 * @uses ProductCondition
 * @uses ProductPartitionType
 */
final class ProductPartition extends Criterion
{
    /**
     * A condition that helps determine whether a product from the Bing Merchant Center store gets served as an ad.
     *
     * @var ProductCondition
     */
    public $Condition;
    /**
     * The identifier of the parent BiddableAdGroupCriterion or NegativeAdGroupCriterion.
     *
     * @var int
     */
    public $ParentCriterionId;
    /**
     * The type of product partition, for example Subdivision or Unit.
     *
     * @var ProductPartitionType
     */
    public $PartitionType;
}
