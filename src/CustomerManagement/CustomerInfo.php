<?php

namespace BingAds\CustomerManagement;

/**
 * Defines a customer identification object that contains information that identifies a customer.
 *
 * @link http://msdn.microsoft.com/en-us/library/ff728384(v=msads.90).aspx CustomerInfo Data Object
 *
 * @used-by GetCustomersInfoResponse
 */
final class CustomerInfo
{
    /**
     * The system generated identifier of the customer.
     *
     * @var int
     */
    public $Id;
    /**
     * The name of the customer.
     *
     * @var string
     */
    public $Name;
}
