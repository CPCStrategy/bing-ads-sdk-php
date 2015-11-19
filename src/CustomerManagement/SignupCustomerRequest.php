<?php

namespace BingAds\CustomerManagement;

/**
 * Signs up a customer with Bing Ads.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn451287(v=msads.90).aspx SignupCustomer Request Object
 * 
 * @uses Customer
 * @uses Account
 * @uses ApplicationType
 * @used-by BingAdsCustomerManagementService::SignupCustomer
 */
final class SignupCustomerRequest
{
    public $Customer;
    public $Account;
    public $ParentCustomerId;
    public $ApplicationScope;
}
