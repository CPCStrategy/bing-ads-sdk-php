<?php

namespace BingAds\CustomerBilling;

/**
 * Gets a list of insertion orders for the specified account.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn451269(v=msads.90).aspx GetInsertionOrdersByAccount Request Object
 * 
 * @used-by BingAdsCustomerBillingService::GetInsertionOrdersByAccount
 */
final class GetInsertionOrdersByAccountRequest
{
    public $AccountId;
    public $InsertionOrderIds;
}
