<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Defines a campaign level product scope with list of conditions that help determine whether a product from the Bing Merchant Center store gets served as a product ad.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913124(v=msads.100).aspx ProductScope Data Object
 * 
 * @uses ProductCondition
 */
final class ProductScope extends Criterion
{
    /**
     * A list of up to 7 product conditions that helps determine whether a product from the Bing Merchant Center store gets served as an ad.
     *
     * @var ProductCondition[]
     */
    public $Conditions;
}
