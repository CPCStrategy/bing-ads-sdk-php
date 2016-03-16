<?php

namespace BingAds\CustomerManagement;

/**
 * Gets a list of the accounts and customers that match the specified filter criteria.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn451281(v=msads.90).aspx FindAccountsOrCustomersInfo Response Object
 * 
 * @uses AccountInfoWithCustomerData
 * @used-by BingAdsCustomerManagementService::FindAccountsOrCustomersInfo
 */
final class FindAccountsOrCustomersInfoResponse
{
    public $AccountInfoWithCustomerData;
}
