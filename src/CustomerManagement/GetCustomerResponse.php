<?php

namespace BingAds\CustomerManagement;

/**
 * Gets the details of a customer.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn451279(v=msads.90).aspx GetCustomer Response Object
 *
 * @uses Customer
 * @used-by BingAdsCustomerManagementService::GetCustomer
 */
final class GetCustomerResponse
{
    /**
     * A Customer object that contains information about the customer.
     *
     * @var Customer
     */
    public $Customer;
}
