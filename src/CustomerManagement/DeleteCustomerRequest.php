<?php

namespace BingAds\CustomerManagement;

/**
 * Deletes a customer.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn451278(v=msads.90).aspx DeleteCustomer Request Object
 * 
 * @used-by BingAdsCustomerManagementService::DeleteCustomer
 */
final class DeleteCustomerRequest
{
    public $CustomerId;
    public $TimeStamp;
}
