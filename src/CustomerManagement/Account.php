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
    public $AccountType;
    public $BillToCustomerId;
    public $CountryCode;
    public $CurrencyType;
    public $AccountFinancialStatus;
    public $Id;
    public $Language;
    public $ForwardCompatibilityMap;
    public $LastModifiedByUserId;
    public $LastModifiedTime;
    public $Name;
    public $Number;
    public $ParentCustomerId;
    public $PaymentMethodId;
    public $PaymentMethodType;
    public $PrimaryUserId;
    public $AccountLifeCycleStatus;
    public $TimeStamp;
    public $TimeZone;
    public $PauseReason;
}
