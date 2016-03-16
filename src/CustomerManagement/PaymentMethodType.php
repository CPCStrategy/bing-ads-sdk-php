<?php

namespace BingAds\CustomerManagement;

/**
 * Defines possible payment methods for a Bing Ads account.
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
    /** A payment service that allows customers to pay for their Bing Ads transactions online. */
    const PayPal = 'PayPal';
    /** The ELV value represents the SEPA payment method. */
    const ELV = 'ELV';
    /** Meant to signal when a customer is funding a prepay account by making payment via a check or a bank transfer. */
    const OfflinePaymentMethod = 'OfflinePaymentMethod';
    /** Virtual Bank Account is a form of payment used widely in Taiwan. */
    const VBA = 'VBA';
    /** Boleto is a form of payment used widely in Brazil. */
    const Boleto = 'Boleto';
}
