<?php

namespace BingAds\CampaignManagement;

/**
 * This feature is currently in pilot and will be generally available soon.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913124(v=msads.90).aspx ProductScope Data Object
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
