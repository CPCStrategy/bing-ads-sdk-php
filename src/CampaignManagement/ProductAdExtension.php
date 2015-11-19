<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a product ad extension.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj721706(v=msads.90).aspx ProductAdExtension Data Object
 * 
 * @uses ProductConditionCollection
 */
final class ProductAdExtension extends AdExtension
{
    /**
     * The display name of the extension.
     *
     * @var string
     */
    public $Name;
    /**
     * The list of products from the Bing Merchant Center store to advertise.
     *
     * @var ProductConditionCollection[]
     */
    public $ProductSelection;
    /**
     * The identifier of the Bing Merchant Center store contains the products to advertise.
     *
     * @var int
     */
    public $StoreId;
    /**
     * The name of the store that StoreId identifies.
     *
     * @var string
     */
    public $StoreName;
}
