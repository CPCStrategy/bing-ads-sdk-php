<?php

namespace BingAds\CustomerManagement;

/**
 * Defines the possible financial status values of an account.
 *
 * @link http://msdn.microsoft.com/en-us/library/ff728399(v=msads.90).aspx AccountFinancialStatus Value Set
 *
 * @used-by Account
 */
final class AccountFinancialStatus
{
    /** For an advertiser account, this status indicates that the customer can add campaigns to the account; however, the service will not deliver the account's ads. */
    const PROPOSED = 'Proposed';
    /** Not used. */
    const PENDING_CREDIT_CHECK = 'PendingCreditCheck';
    /** The account is in good standing. */
    const CLEAR_FINANCIAL_STATUS = 'ClearFinancialStatus';
    /** Not used. */
    const SOLD_TO_ONLY = 'SoldToOnly';
    /** Not used. */
    const CREDIT_WARNING = 'CreditWarning';
    /** For an advertiser account, this status indicates that the account is past due. */
    const HOLD = 'Hold';
    /** The account is past due; however, collection is no longer being pursued. */
    const WRITE_OFF = 'WriteOff';
    /** For a publisher account, this status indicates that the publisher has yet to provide a valid tax instrument. */
    const TAX_ON_HOLD = 'TaxOnHold';
    /** For a publisher account, this status indicates that the payout to the publisher was placed on hold by publisher. */
    const USER_HOLD = 'UserHold';
}
