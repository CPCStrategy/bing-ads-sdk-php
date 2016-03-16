<?php

namespace BingAds\CustomerManagement;

/**
 * Defines an error object that contains the details that explain why the service operation failed.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn169116(v=msads.90).aspx AdApiError Data Object
 * 
 * @used-by AdApiFaultDetail
 */
final class AdApiError
{
    /**
     * A numeric error code that identifies the error.
     *
     * @var int
     */
    public $Code;
    /**
     * A message that contains additional details about the error.
     *
     * @var string
     */
    public $Detail;
    /**
     * A symbolic string constant that identifies the error.
     *
     * @var string
     */
    public $ErrorCode;
    /**
     * A message that describes the error.
     *
     * @var string
     */
    public $Message;
}
