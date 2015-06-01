<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a campaign level product criterion, which includes a list of conditions that determine whether a product from the Bing Merchant Center store gets served as a product ad.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj689539(v=msads.90).aspx Product Data Object
 *
 * @uses ProductCondition
 */
final class Product extends Criterion
{
    /**
     * A list of conditions that determine whether a product from the Bing Merchant Center store gets served as a product ad.
     *
     * @var ProductCondition[]
     */
    public $Conditions;
}
