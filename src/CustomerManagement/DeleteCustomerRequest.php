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
    /**
     * The identifier of the customer to delete.
     *
     * @var int
     */
    public $CustomerId;
    /**
     * The time-stamp value that the operation uses to reconcile the update.
     *
     * @var base64Binary
     */
    public $TimeStamp;
}
