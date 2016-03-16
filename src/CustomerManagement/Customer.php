<?php

namespace BingAds\CustomerManagement;

/**
 * Defines a customer.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671875(v=msads.90).aspx Customer Data Object
 * 
 * @uses Address
 * @uses CustomerFinancialStatus
 * @uses Industry
 * @uses KeyValuePairOfstringstring
 * @uses LanguageType
 * @uses ServiceLevel
 * @uses CustomerLifeCycleStatus
 * @used-by GetAccessibleCustomerResponse
 * @used-by GetCustomerResponse
 * @used-by SearchCustomersResponse
 * @used-by SignupCustomerRequest
 * @used-by UpdateCustomerRequest
 */
final class Customer
{
    /**
     * The customer's business address.
     *
     * @var Address
     */
    public $CustomerAddress;
    /**
     * The financial status of the customer.
     *
     * @var CustomerFinancialStatus
     */
    public $CustomerFinancialStatus;
    /**
     * The system generated customer identifier.
     *
     * @var int
     */
    public $Id;
    /**
     * The primary business segment of the customer, for example, automotive, food, or entertainment.
     *
     * @var Industry
     */
    public $Industry;
    /**
     * The identifier of the last user to update the customer's information.
     *
     * @var int
     */
    public $LastModifiedByUserId;
    /**
     * The date and time that the customer information was last updated.
     *
     * @var \DateTime
     */
    public $LastModifiedTime;
    /**
     * The primary country where the customer operates.
     *
     * @var string
     */
    public $MarketCountry;
    /**
     * The list of key and value strings for forward compatibility.
     *
     * @var KeyValuePairOfstringstring[]
     */
    public $ForwardCompatibilityMap;
    /**
     * The primary language that the customer uses.
     *
     * @var LanguageType
     */
    public $MarketLanguage;
    /**
     * The name of the customer.
     *
     * @var string
     */
    public $Name;
    /**
     * For internal use only.
     *
     * @var ServiceLevel
     */
    public $ServiceLevel;
    /**
     * The status of the customer.
     *
     * @var CustomerLifeCycleStatus
     */
    public $CustomerLifeCycleStatus;
    /**
     * A time-stamp value that the system uses internally to reconcile updates when you call the UpdateCustomer or DeleteCustomer operation.
     *
     * @var base64Binary
     */
    public $TimeStamp;
    /**
     * A system-generated customer number that is used in the Bing Ads web application.
     *
     * @var string
     */
    public $Number;
}
