<?php

namespace BingAds\CustomerManagement;

/**
 * Searches for customers that match a specified criteria.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn452055(v=msads.90).aspx SearchCustomers Response Object
 * 
 * @uses Customer
 * @used-by BingAdsCustomerManagementService::SearchCustomers
 */
final class SearchCustomersResponse
{
    public $Customers;
}
