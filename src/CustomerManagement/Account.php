<?php

namespace BingAds\CustomerManagement;

/**
 * Defines an account.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671588(v=msads.90).aspx Account Data Object
 *
 * @uses AccountType
 * @uses CurrencyType
 * @uses AccountFinancialStatus
 * @uses LanguageType
 * @uses KeyValuePairOfstringstring
 * @uses PaymentMethodType
 * @uses AccountLifeCycleStatus
 * @uses TimeZoneType
 * @used-by AddAccountRequest
 * @used-by AddPrepayAccountRequest
 * @used-by GetAccountResponse
 * @used-by SearchAccountsResponse
 * @used-by SignupCustomerRequest
 * @used-by UpdateAccountRequest
 * @used-by UpdatePrepayAccountRequest
 */
class Account
{
    /**
     * The type of the account.
     *
     * @var AccountType
     */
    public $AccountType;
    /**
     * The identifier of the customer that is billed for the charges that the account generates.
     *
     * @var int
     */
    public $BillToCustomerId;
    /**
     * The code that identifies the country/region in which the account operates.
     *
     * @var string
     */
    public $CountryCode;
    /**
     * The type of currency that is used to settle the account.
     *
     * @var CurrencyType
     */
    public $CurrencyType;
    /**
     * The financial status of the account.
     *
     * @var AccountFinancialStatus
     */
    public $AccountFinancialStatus;
    /**
     * The system generated identifier of the account.
     *
     * @var int
     */
    public $Id;
    /**
     * The language used to render the invoice (if you use an invoice as your payment method).
     *
     * @var LanguageType
     */
    public $Language;
    /**
     * The following list of key and value strings are available for forward compatibility.
     *
     * @var KeyValuePairOfstringstring[]
     */
    public $ForwardCompatibilityMap;
    /**
     * The identifier of the last user to update the account's information.
     *
     * @var int
     */
    public $LastModifiedByUserId;
    /**
     * The date and time that the account was last updated.
     *
     * @var \DateTime
     */
    public $LastModifiedTime;
    /**
     * The name of the account.
     *
     * @var string
     */
    public $Name;
    /**
     * The system generated account number that is used to identify the account in the Bing Ads web application.
     *
     * @var string
     */
    public $Number;
    /**
     * The identifier of the customer that owns the account.
     *
     * @var int
     */
    public $ParentCustomerId;
    /**
     * The identifier of the payment instrument to use to settle the account.
     *
     * @var int
     */
    public $PaymentMethodId;
    /**
     * The type of payment instrument to use to settle the account.
     *
     * @var PaymentMethodType
     */
    public $PaymentMethodType;
    /**
     * The identifier of the account manager who is primarily responsible for managing this account.
     *
     * @var int
     */
    public $PrimaryUserId;
    /**
     * The status of the account.
     *
     * @var AccountLifeCycleStatus
     */
    public $AccountLifeCycleStatus;
    /**
     * The time-stamp value that the system uses internally to reconcile updates when you call the UpdateAccount or DeleteAccount operation.
     *
     * @var base64Binary
     */
    public $TimeStamp;
    /**
     * The default time-zone value to use for campaigns in this account.
     *
     * @var TimeZoneType
     */
    public $TimeZone;
    /**
     * A flag value that indicates who paused the account.
     *
     * @var int
     */
    public $PauseReason;
}
