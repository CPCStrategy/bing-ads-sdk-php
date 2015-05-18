<?php

namespace BingAds\CampaignManagement;

/**
 * This feature is currently in pilot and will be generally available soon.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913132(v=msads.90).aspx ShoppingSetting Data Object
 */
final class ShoppingSetting extends Setting
{
    /**
     * Helps determine which Bing Shopping campaign serves ads, in the event that two or more campaigns use the product catalog feed from the same Bing Merchant Center store.
     *
     * @var int
     */
    public $Priority;
    /**
     * The country code for the Bing Merchant Center store.
     *
     * @var string
     */
    public $SalesCountryCode;
    /**
     * The unique identifier for the Bing Merchant Center store that your product catalog feed belongs to.
     *
     * @var int
     */
    public $StoreId;
}
