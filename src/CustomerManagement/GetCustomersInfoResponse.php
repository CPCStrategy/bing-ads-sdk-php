<?php

namespace BingAds\CustomerManagement;

/**
 * Gets a list of objects that contain customer identification information, for example the name and identifier of the customer.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn451282(v=msads.90).aspx GetCustomersInfo Response Object
 * 
 * @uses CustomerInfo
 * @used-by BingAdsCustomerManagementService::GetCustomersInfo
 */
final class GetCustomersInfoResponse
{
    public $CustomersInfo;
}
