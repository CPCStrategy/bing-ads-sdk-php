<?php

namespace BingAds\Optimizer;

/**
 * Defines an error object that identifies the item within the batch of items in the request message that caused the operation to fail, and describes the reason for the failure.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn169131(v=msads.90).aspx BatchError Data Object
 * 
 * @used-by ApiFaultDetail
 */
final class BatchError
{
    /**
     * A numeric error code that identifies the error.
     *
     * @var int
     */
    public $Code;
    /**
     * A message that provides additional details about the batch error.
     *
     * @var string
     */
    public $Details;
    /**
     * A symbolic string constant that identifies the error.
     *
     * @var string
     */
    public $ErrorCode;
    /**
     * The zero-based index of the item in the batch of items in the request message that failed.
     *
     * @var int
     */
    public $Index;
    /**
     * A message that describes the error.
     *
     * @var string
     */
    public $Message;
}
