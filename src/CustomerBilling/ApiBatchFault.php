<?php

namespace BingAds\CustomerBilling;

/**
 * Defines a fault object that operations return when web service-specific errors occur, such as when the request message contains incomplete or invalid data.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn169102(v=msads.90).aspx ApiBatchFault Data Object
 * 
 * @uses BatchError
 */
final class ApiBatchFault extends ApiFault
{
    /**
     * An array of BatchError objects that identifies the items in the batch of items in the request message that caused the operation to fail.
     *
     * @var BatchError[]
     */
    public $BatchErrors;
}
