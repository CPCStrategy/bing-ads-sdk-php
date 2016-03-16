<?php

namespace BingAds\CustomerBilling;

/**
 * Defines a billing document.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn469177(v=msads.90).aspx BillingDocument Data Object
 * 
 * @uses DataType
 * @used-by GetBillingDocumentsResponse
 * @used-by GetDisplayInvoicesResponse
 * @used-by GetKOHIOInvoicesResponse
 */
final class BillingDocument
{
    /**
     * The billing document.
     *
     * @var base64Binary
     */
    public $Data;
    /**
     * The identifier of the billing document.
     *
     * @var int
     */
    public $Id;
    /**
     * The format of the billing document.
     *
     * @var DataType
     */
    public $Type;
}
