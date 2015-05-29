<?php

namespace BingAds\CustomerBilling;

/**
 * Adds an insertion order to the specified account.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743758(v=msads.90).aspx AddInsertionOrder Response Object
 *
 * @used-by BingAdsCustomerBillingService::AddInsertionOrder
 */
final class AddInsertionOrderResponse
{
    /**
     * A long value that represents the identifier for the insertion order that was added.
     *
     * @var int
     */
    public $InsertionOrderId;
    /**
     * Identifies the server time in UTC when the insertion order was added.
     *
     * @var \DateTime
     */
    public $CreateTime;
}
