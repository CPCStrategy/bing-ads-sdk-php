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
    const CreditCard = 'CreditCard';
    /** An invoice is sent to the customer requesting payment. */
    const Invoice = 'Invoice';
    /** The payments are made with a check. */
    const Check = 'Check';
    /** The payments are made with an electronic funds transfer. */
    const ElectronicFundsTransfer = 'ElectronicFundsTransfer';
}
