<?php

namespace BingAds\CustomerManagement;

/**
 * Defines the possible financial status values of a customer.
 *
 * @link http://msdn.microsoft.com/en-us/library/ff728435(v=msads.90).aspx CustomerFinancialStatus Value Set
 *
 * @used-by Customer
 */
final class CustomerFinancialStatus
{
    /** Not used. */
    const PROPOSALS_ONLY = 'ProposalsOnly';
    /** The customer is undergoing a credit check as part of the customer sign-up process. */
    const PENDING_CREDIT_CHECK = 'PendingCreditCheck';
    /** The customer is in good standing. */
    const CLEAR_FINANCIAL_STATUS = 'ClearFinancialStatus';
    /** The customer is considered to be a credit risk. */
    const SOLD_TO_ONLY = 'SoldToOnly';
    /** One of the customer's accounts is past due. */
    const CREDIT_HOLD = 'CreditHold';
    /** Not used. */
    const CREDIT_WARNING = 'CreditWarning';
}
