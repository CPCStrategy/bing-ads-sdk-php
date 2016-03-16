<?php

namespace BingAds\CustomerManagement;

/**
 * Defines an object that contains information that identifies an account and the customer that manages or owns the account.
 *
 * @link http://msdn.microsoft.com/en-us/library/hh420973(v=msads.90).aspx AccountInfoWithCustomerData Data Object
 * 
 * @uses AccountLifeCycleStatus
 * @used-by FindAccountsOrCustomersInfoResponse
 */
final class AccountInfoWithCustomerData
{
    /**
     * The system generated identifier of the customer that manages or owns the account (see Remarks).
     *
     * @var int
     */
    public $CustomerId;
    /**
     * The name of the customer that manages or owns the account.
     *
     * @var string
     */
    public $CustomerName;
    /**
     * The system generated identifier of the account.
     *
     * @var int
     */
    public $AccountId;
    /**
     * The name of the account.
     *
     * @var string
     */
    public $AccountName;
    /**
     * The system generated account number that is used to identify the account in the Bing Ads web application.
     *
     * @var string
     */
    public $AccountNumber;
    /**
     * The status of the account.
     *
     * @var AccountLifeCycleStatus
     */
    public $AccountLifeCycleStatus;
    /**
     * A flag value that indicates who paused the account.
     *
     * @var int
     */
    public $PauseReason;
}
