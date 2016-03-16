<?php

namespace BingAds\CustomerBilling;

/**
 * Adds an insertion order to the specified account.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743758(v=msads.90).aspx AddInsertionOrder Request Object
 * 
 * @uses InsertionOrder
 * @used-by BingAdsCustomerBillingService::AddInsertionOrder
 */
final class AddInsertionOrderRequest
{
    public $InsertionOrder;
}
