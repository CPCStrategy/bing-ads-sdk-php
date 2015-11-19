<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the conditions that determine whether a product from the Bing Merchant Center store gets served as a product ad.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj721704(v=msads.90).aspx ProductConditionCollection Data Object
 * 
 * @uses ProductCondition
 * @used-by ProductAdExtension
 */
final class ProductConditionCollection
{
    /**
     * A list of conditions that determine whether a product from the Bing Merchant Center store gets served as a product ad.
     *
     * @var ProductCondition[]
     */
    public $Conditions;
}
