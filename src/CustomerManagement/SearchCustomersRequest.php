<?php

namespace BingAds\CustomerManagement;

/**
 * Searches for customers that match a specified criteria.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn452055(v=msads.90).aspx SearchCustomers Request Object
 * 
 * @uses ApplicationType
 * @uses Predicate
 * @uses DateRange
 * @uses OrderBy
 * @uses Paging
 * @used-by BingAdsCustomerManagementService::SearchCustomers
 */
final class SearchCustomersRequest
{
    public $ApplicationScope;
    public $Predicates;
    public $DateRange;
    public $Ordering;
    public $PageInfo;
}
