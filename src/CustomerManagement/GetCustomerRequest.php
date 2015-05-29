<?php

namespace BingAds\CustomerManagement;

/**
 * Gets the details of a customer.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn451279(v=msads.90).aspx GetCustomer Request Object
 *
 * @used-by BingAdsCustomerManagementService::GetCustomer
 */
final class GetCustomerRequest
{
    /**
     * The identifier of the customer whose information you want to get.
     *
     * @var int
     */
    public $CustomerId;
}
