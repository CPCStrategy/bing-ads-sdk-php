<?php

namespace BingAds\CustomerBilling;

/**
 * Searches for insertion orders that match a specified criteria.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743759(v=msads.90).aspx SearchInsertionOrders Request Object
 * 
 * @uses Predicate
 * @uses OrderBy
 * @uses Paging
 * @used-by BingAdsCustomerBillingService::SearchInsertionOrders
 */
final class SearchInsertionOrdersRequest
{
    public $Predicates;
    public $Ordering;
    public $PageInfo;
}
