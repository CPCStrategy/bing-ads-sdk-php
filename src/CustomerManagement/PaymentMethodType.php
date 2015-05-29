<?php

namespace BingAds\CustomerManagement;

/**
 * The value set defines a broad selection of languages; however, not all languages are supported.
 *
 * @link http://msdn.microsoft.com/en-us/library/ee704164(v=msads.90).aspx PaymentMethodType Value Set
 *
 * @used-by Account
 */
final class PaymentMethodType
{
    /** The payments are made with a credit card. */
    const CREDIT_CARD = 'CreditCard';
    /** An invoice is sent to the customer requesting payment. */
    const INVOICE = 'Invoice';
    /** The payments are made with a check. */
    const CHECK = 'Check';
    /** The payments are made with an electronic funds transfer. */
    const ELECTRONIC_FUNDS_TRANSFER = 'ElectronicFundsTransfer';
}
