<?php

namespace BingAds\CustomerBilling;

/**
 * Updates an insertion order within the specified account.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743760(v=msads.90).aspx UpdateInsertionOrder Request Object
 * 
 * @uses InsertionOrder
 * @used-by BingAdsCustomerBillingService::UpdateInsertionOrder
 */
final class UpdateInsertionOrderRequest
{
    public $InsertionOrder;
}
